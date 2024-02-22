<?php

/* 
 * MIT License
 *
 * Copyright (c) 2018-present, Marks Software GmbH (https://www.marks-software.de/)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
use Cake\Core\Configure;

// Get session object
$session = $this->getRequest()->getSession();

$backendButtonColor = 'light';
if (Configure::check('YabCmsFf.settings.backendButtonColor')):
    $backendButtonColor = Configure::read('YabCmsFf.settings.backendButtonColor');
endif;

// Title
$this->assign('title', $this->YabCmsFf->readCamel($this->getRequest()->getParam('controller'))
    . ' :: '
    . ucfirst($this->YabCmsFf->readCamel($this->getRequest()->getParam('action')))
);
// Breadcrumb
$this->Breadcrumbs->add([
    [
        'title' => __d('yab_cms_ff', 'Dashboard'),
        'url' => [
            'plugin'        => 'YabCmsFf',
            'controller'    => 'Dashboards',
            'action'        => 'dashboard',
        ]
    ],
    ['title' => $this->YabCmsFf->readCamel($this->getRequest()->getParam('controller'))]
]); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <?= $this->Form->create(null, [
                    'url' => [
                        'plugin'        => 'YabCmsFf',
                        'controller'    => 'ArticleTypeAttributes',
                        'action'        => 'index',
                    ],
                ]); ?>
                <?= $this->Form->control('search', [
                    'type'          => 'text',
                    'value'         => $this->getRequest()->getQuery('search'),
                    'label'         => false,
                    'placeholder'   => __d('yab_cms_ff', 'Search') . '...',
                    'prepend' => $this->Html->link(
                        $this->Html->icon('plus') . ' ' . __d('yab_cms_ff', 'Add type attribute'),
                        [
                            'plugin'        => 'YabCmsFf',
                            'controller'    => 'ArticleTypeAttributes',
                            'action'        => 'add',
                        ],
                        ['escape' => false]
                    ),
                    'append' => $this->Form->button(
                            __d('yab_cms_ff', 'Filter'),
                            ['class' => 'btn btn-' . h($backendButtonColor)]
                        )
                        . ' '
                        . $this->Html->link(
                            __d('yab_cms_ff', 'Reset'),
                            [
                                'plugin'        => 'YabCmsFf',
                                'controller'    => 'ArticleTypeAttributes',
                                'action'        => 'index',
                            ],
                            [
                                'class'     => 'btn btn-' . h($backendButtonColor),
                                'escape'    => false,
                            ]
                        )
                        . ' '
                        . $this->Html->link(
                            $this->Html->icon('upload') . ' ' . __d('yab_cms_ff', 'CSV'),
                            [
                                'plugin'        => 'YabCmsFf',
                                'controller'    => 'ArticleTypeAttributes',
                                'action'        => 'import',
                            ],
                            [
                                'class'     => 'btn btn-' . h($backendButtonColor),
                                'escape'    => false,
                                'title'     => __d('yab_cms_ff', 'Upload & import CSV'),
                            ]
                        )
                        . ' '
                        . $this->Html->link(
                            $this->Html->icon('download') . ' ' . __d('yab_cms_ff', 'CSV'),
                            [
                                'plugin'        => 'YabCmsFf',
                                'controller'    => 'ArticleTypeAttributes',
                                'action'        => 'export',
                                '_ext'          => 'csv',
                            ],
                            [
                                'class'     => 'btn btn-' .h($backendButtonColor),
                                'escape'    => false,
                                'title'     => __d('yab_cms_ff', 'Export & download CSV'),
                            ]
                        ),
                ]); ?>
                <?= $this->Form->end(); ?>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('foreign_key', __d('yab_cms_ff', 'Foreign key')); ?></th>
                        <th><?= $this->Paginator->sort('title', __d('yab_cms_ff', 'Title')); ?></th>
                        <th><?= $this->Paginator->sort('alias', __d('yab_cms_ff', 'Alias')); ?></th>
                        <th><?= $this->Paginator->sort('type', __d('yab_cms_ff', 'Type')); ?></th>
                        <th><?= $this->Paginator->sort('empty_value', __d('yab_cms_ff', 'Empty value')); ?></th>
                        <th><?= $this->Paginator->sort('wysiwyg', __d('yab_cms_ff', 'WYSIWYG')); ?></th>
                        <th class="actions"><?= __d('yab_cms_ff', 'Actions'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($articleTypeAttributes as $articleTypeAttribute): ?>
                        <tr>
                            <td><?= h($articleTypeAttribute->foreign_key); ?></td>
                            <td><?= h($articleTypeAttribute->title); ?></td>
                            <td><?= h($articleTypeAttribute->alias); ?></td>
                            <td><?= h($articleTypeAttribute->type); ?></td>
                            <td><?= $this->YabCmsFf->status(h($articleTypeAttribute->empty_value)); ?></td>
                            <td><?= $this->YabCmsFf->status(h($articleTypeAttribute->wysiwyg)); ?></td>
                            <td class="actions">
                                <?php if (!empty($articleTypeAttribute->article_type_attribute_choices)): ?>
                                    <?= $this->Html->link(
                                        $this->Html->icon('list'),
                                        '#',
                                        [
                                            'title'         => __d('yab_cms_ff', 'Type attribute choices'),
                                            'data-target'   => '#modal' . '-' . h($articleTypeAttribute->id),
                                            'data-toggle'   => 'modal',
                                            'escape'        => false,
                                        ]); ?>
                                    <div
                                        class="modal fade"
                                        id="modal-<?= h($articleTypeAttribute->id); ?>"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="modal-<?= h($articleTypeAttribute->id); ?>-label"
                                        aria-hidden="true"
                                    >
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5
                                                        class="modal-title"
                                                        id="modal-<?= h($articleTypeAttribute->id); ?>-label"
                                                    >
                                                        <?= __d('yab_cms_ff', 'Type attribute choices') . ' ' . __d('yab_cms_ff', 'for') . ' ' . h($articleTypeAttribute->title); ?>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ol>
                                                        <?php foreach ($articleTypeAttribute->article_type_attribute_choices as $choice): ?>
                                                            <li><?= $this->Html->link(h($choice->value), [
                                                                'plugin'        => 'YabCmsFf',
                                                                'controller'    => 'ArticleTypeAttributeChoices',
                                                                'action'        => 'view',
                                                                'id'            => h($choice->id),
                                                            ]); ?></li>
                                                        <?php endforeach; ?>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?= $this->Html->link(
                                    $this->Html->icon('eye'),
                                    [
                                        'plugin'        => 'YabCmsFf',
                                        'controller'    => 'ArticleTypeAttributes',
                                        'action'        => 'view',
                                        'id'            => h($articleTypeAttribute->id),
                                    ],
                                    [
                                        'title'         => __d('yab_cms_ff', 'View'),
                                        'data-toggle'   => 'tooltip',
                                        'escape'        => false,
                                    ]); ?>
                                <?= $this->Html->link(
                                    $this->Html->icon('edit'),
                                    [
                                        'plugin'        => 'YabCmsFf',
                                        'controller'    => 'ArticleTypeAttributes',
                                        'action'        => 'edit',
                                        'id'            => h($articleTypeAttribute->id),
                                    ],
                                    [
                                        'title'         => __d('yab_cms_ff', 'Edit'),
                                        'data-toggle'   => 'tooltip',
                                        'escape'        => false,
                                    ]); ?>
                                <?= $this->Form->postLink(
                                    $this->Html->icon('trash'),
                                    [
                                        'plugin'        => 'YabCmsFf',
                                        'controller'    => 'ArticleTypeAttributes',
                                        'action'        => 'delete',
                                        'id'            => h($articleTypeAttribute->id),
                                    ],
                                    [
                                        'confirm' => __d(
                                            'yab_cms_ff',
                                            'Are you sure you want to delete "{title}"?',
                                            ['title' => h($articleTypeAttribute->title)]
                                        ),
                                        'title'         => __d('yab_cms_ff', 'Delete'),
                                        'data-toggle'   => 'tooltip',
                                        'escape'        => false,
                                    ]); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <?= $this->element('paginator'); ?>

        </div>
    </div>
</div>

<?= $this->Html->script(
    'YabCmsFf' . '.' . 'admin' . DS . 'template' . DS . 'admin' . DS . 'default',
    ['block' => 'scriptBottom']); ?>
<?= $this->Html->scriptBlock(
    '$(function() {
        Default.init();
    });',
    ['block' => 'scriptBottom']); ?>
