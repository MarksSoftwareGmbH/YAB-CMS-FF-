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
                        'controller'    => 'ArticleTypeAttributeChoices',
                        'action'        => 'index',
                    ],
                ]); ?>
                <?php $this->Form->setTemplates(['inputGroupText' => '{{content}}']); ?>
                <?= $this->Form->control('search', [
                    'type'          => 'text',
                    'value'         => $this->getRequest()->getQuery('search'),
                    'label'         => false,
                    'placeholder'   => __d('yab_cms_ff', 'Search') . '...',
                    'prepend'       => $this->Html->link(
                        $this->Html->icon('plus') . ' ' . __d('yab_cms_ff', 'Add type attribute choice'),
                        [
                            'plugin'        => 'YabCmsFf',
                            'controller'    => 'ArticleTypeAttributeChoices',
                            'action'        => 'add',
                        ],
                        [
                            'class'         => 'btn btn-' . h($backendButtonColor),
                            'escapeTitle'   => false,
                        ]),
                    'append' => $this->Form->button(
                            __d('yab_cms_ff', 'Filter'),
                            ['class' => 'btn btn-' . h($backendButtonColor)]
                        )
                        . ' '
                        . $this->Html->link(
                            __d('yab_cms_ff', 'Reset'),
                            [
                                'plugin'        => 'YabCmsFf',
                                'controller'    => 'ArticleTypeAttributeChoices',
                                'action'        => 'index',
                            ],
                            [
                                'class'         => 'btn btn-' . h($backendButtonColor),
                                'escapeTitle'   => false,
                            ]
                        )
                        . ' '
                        . $this->Html->link(
                            $this->Html->icon('upload') . ' ' . __d('yab_cms_ff', 'CSV'),
                            [
                                'plugin'        => 'YabCmsFf',
                                'controller'    => 'ArticleTypeAttributeChoices',
                                'action'        => 'import',
                            ],
                            [
                                'class'         => 'btn btn-' . h($backendButtonColor),
                                'escapeTitle'   => false,
                                'title'         => __d('yab_cms_ff', 'Upload & import CSV'),
                            ]
                        )
                        . ' '
                        . '<div class="btn-group dropleft">'
                        . $this->Html->link(
                            $this->Html->tag('span', '', ['class' => 'caret']) . ' ' . $this->Html->icon('download') . ' ' . __d('yab_cms_ff', 'Download'),
                            '#',
                            [
                                'type'          => 'button',
                                'class'         => 'dropdown-toggle btn btn-' . h($backendButtonColor),
                                'id'            => 'dropdownMenu',
                                'data-toggle'   => 'dropdown',
                                'aria-haspopup' => true,
                                'aria-expanded' => false,
                                'escapeTitle'   => false,
                                'title'         => __d('yab_cms_ff', 'Download'),
                            ]
                        )
                        . '<div class="dropdown-menu" aria-labelledby="dropdownMenu">'
                        . $this->Html->link(
                            __d('yab_cms_ff', 'XLSX'),
                            [
                                'plugin'        => 'YabCmsFf',
                                'controller'    => 'ArticleTypeAttributeChoices',
                                'action'        => 'exportXlsx',
                            ],
                            [
                                'class'         => 'dropdown-item',
                                'escapeTitle'   => false,
                                'title'         => __d('yab_cms_ff', 'Export & download XLSX'),
                            ])
                        . $this->Html->link(
                            __d('yab_cms_ff', 'CSV'),
                            [
                                'plugin'        => 'YabCmsFf',
                                'controller'    => 'ArticleTypeAttributeChoices',
                                'action'        => 'exportCsv',
                                '_ext'          => 'csv',
                            ],
                            [
                                'class'         => 'dropdown-item',
                                'escapeTitle'   => false,
                                'title'         => __d('yab_cms_ff', 'Export & download CSV'),
                            ])
                        . $this->Html->link(
                            __d('yab_cms_ff', 'XML'),
                            [
                                'plugin'        => 'YabCmsFf',
                                'controller'    => 'ArticleTypeAttributeChoices',
                                'action'        => 'exportXml',
                                '_ext'          => 'xml',
                            ],
                            [
                                'class'         => 'dropdown-item',
                                'escapeTitle'   => false,
                                'title'         => __d('yab_cms_ff', 'Export & download XML'),
                            ])
                        . $this->Html->link(
                            __d('yab_cms_ff', 'JSON'),
                            [
                                'plugin'        => 'YabCmsFf',
                                'controller'    => 'ArticleTypeAttributeChoices',
                                'action'        => 'exportJson',
                                '_ext'          => 'json',
                            ],
                            [
                                'class'         => 'dropdown-item',
                                'escapeTitle'   => false,
                                'title'         => __d('yab_cms_ff', 'Export & download JSON'),
                            ])
                        . '</div>'
                        . '</div>',
                ]); ?>
                <?= $this->Form->end(); ?>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('foreign_key', __d('yab_cms_ff', 'Foreign key')); ?></th>
                        <th><?= $this->Paginator->sort('ArticleTypeAttributes.alias', __d('yab_cms_ff', 'Type Attribute')); ?></th>
                        <th><?= $this->Paginator->sort('value', __d('yab_cms_ff', 'Value')); ?></th>
                        <th class="actions"><?= __d('yab_cms_ff', 'Actions'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($articleTypeAttributeChoices as $articleTypeAttributeChoice): ?>
                        <tr>
                            <td><?= h($articleTypeAttributeChoice->foreign_key); ?></td>
                            <td>
                                <?php if (!empty($articleTypeAttributeChoice->article_type_attribute->title_alias)): ?>
                                    <?= $articleTypeAttributeChoice->has('article_type_attribute')?
                                        $this->Html->link(
                                            h($articleTypeAttributeChoice->article_type_attribute->title_alias),
                                            [
                                                'plugin'        => 'YabCmsFf',
                                                'controller'    => 'ArticleTypeAttributes',
                                                'action'        => 'view',
                                                'id'            => h($articleTypeAttributeChoice->article_type_attribute->id),
                                            ]): '-'; ?>
                                <?php else: ?>
                                    -
                                <?php endif; ?>        
                            </td>
                            <td><?= h($articleTypeAttributeChoice->value); ?></td>
                            <td class="actions">
                                <?= $this->Html->link(
                                    $this->Html->icon('eye'),
                                    [
                                        'plugin'        => 'YabCmsFf',
                                        'controller'    => 'ArticleTypeAttributeChoices',
                                        'action'        => 'view',
                                        'id'            => h($articleTypeAttributeChoice->id),
                                    ],
                                    [
                                        'title'         => __d('yab_cms_ff', 'View'),
                                        'data-toggle'   => 'tooltip',
                                        'escapeTitle'   => false,
                                    ]); ?>
                                <?= $this->Html->link(
                                    $this->Html->icon('edit'),
                                    [
                                        'plugin'        => 'YabCmsFf',
                                        'controller'    => 'ArticleTypeAttributeChoices',
                                        'action'        => 'edit',
                                        'id'            => h($articleTypeAttributeChoice->id),
                                    ],
                                    [
                                        'title'         => __d('yab_cms_ff', 'Edit'),
                                        'data-toggle'   => 'tooltip',
                                        'escapeTitle'   => false,
                                    ]); ?>
                                <?= $this->Form->postLink(
                                    $this->Html->icon('trash'),
                                    [
                                        'plugin'        => 'YabCmsFf',
                                        'controller'    => 'ArticleTypeAttributeChoices',
                                        'action'        => 'delete',
                                        'id'            => h($articleTypeAttributeChoice->id),
                                    ],
                                    [
                                        'confirm' => __d(
                                            'yab_cms_ff',
                                            'Are you sure, you want to delete "{value}"?',
                                            ['value' => h($articleTypeAttributeChoice->value)]
                                        ),
                                        'title'         => __d('yab_cms_ff', 'Delete'),
                                        'data-toggle'   => 'tooltip',
                                        'escapeTitle'   => false,
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
