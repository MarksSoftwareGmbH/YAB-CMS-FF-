<?php
declare(strict_types=1);

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
use Cake\I18n\DateTime;
use Cake\Utility\Text;
use Migrations\AbstractSeed;

/**
 * Class ArticleTypeAttributeChoicesSeed
 */
class ArticleTypeAttributeChoicesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $dateTime = DateTime::now();

        $data = [
            [
                'id' => '1',
                'article_type_attribute_id' => '12',
                'uuid_id' => Text::uuid(),
                'foreign_key' => NULL,
                'value' => 'Mr.',
                'link_1' => NULL,
                'link_2' => NULL,
                'link_3' => NULL,
                'link_4' => NULL,
                'link_5' => NULL,
                'link_6' => NULL,
                'link_7' => NULL,
                'link_8' => NULL,
                'link_9' => NULL,
                'image_1' => NULL,
                'image_1_file' => NULL,
                'image_2' => NULL,
                'image_2_file' => NULL,
                'image_3' => NULL,
                'image_3_file' => NULL,
                'image_4' => NULL,
                'image_4_file' => NULL,
                'image_5' => NULL,
                'image_5_file' => NULL,
                'image_6' => NULL,
                'image_6_file' => NULL,
                'image_7' => NULL,
                'image_7_file' => NULL,
                'image_8' => NULL,
                'image_8_file' => NULL,
                'image_9' => NULL,
                'image_9_file' => NULL,
                'video_1' => NULL,
                'video_1_file' => NULL,
                'video_2' => NULL,
                'video_2_file' => NULL,
                'video_3' => NULL,
                'video_3_file' => NULL,
                'video_4' => NULL,
                'video_4_file' => NULL,
                'video_5' => NULL,
                'video_5_file' => NULL,
                'video_6' => NULL,
                'video_6_file' => NULL,
                'video_7' => NULL,
                'video_7_file' => NULL,
                'video_8' => NULL,
                'video_8_file' => NULL,
                'video_9' => NULL,
                'video_9_file' => NULL,
                'pdf_1' => NULL,
                'pdf_1_file' => NULL,
                'pdf_2' => NULL,
                'pdf_2_file' => NULL,
                'pdf_3' => NULL,
                'pdf_3_file' => NULL,
                'pdf_4' => NULL,
                'pdf_4_file' => NULL,
                'pdf_5' => NULL,
                'pdf_5_file' => NULL,
                'pdf_6' => NULL,
                'pdf_6_file' => NULL,
                'pdf_7' => NULL,
                'pdf_7_file' => NULL,
                'pdf_8' => NULL,
                'pdf_8_file' => NULL,
                'pdf_9' => NULL,
                'pdf_9_file' => NULL,
                'created' => $dateTime->i18nFormat('yyyy-MM-dd HH:mm:ss'),
                'created_by' => '1',
                'modified' => $dateTime->i18nFormat('yyyy-MM-dd HH:mm:ss'),
                'modified_by' => '1',
                'deleted' => NULL,
                'deleted_by' => NULL,
            ],
            [
                'id' => '2',
                'article_type_attribute_id' => '12',
                'uuid_id' => Text::uuid(),
                'foreign_key' => NULL,
                'value' => 'Mrs.',
                'link_1' => NULL,
                'link_2' => NULL,
                'link_3' => NULL,
                'link_4' => NULL,
                'link_5' => NULL,
                'link_6' => NULL,
                'link_7' => NULL,
                'link_8' => NULL,
                'link_9' => NULL,
                'image_1' => NULL,
                'image_1_file' => NULL,
                'image_2' => NULL,
                'image_2_file' => NULL,
                'image_3' => NULL,
                'image_3_file' => NULL,
                'image_4' => NULL,
                'image_4_file' => NULL,
                'image_5' => NULL,
                'image_5_file' => NULL,
                'image_6' => NULL,
                'image_6_file' => NULL,
                'image_7' => NULL,
                'image_7_file' => NULL,
                'image_8' => NULL,
                'image_8_file' => NULL,
                'image_9' => NULL,
                'image_9_file' => NULL,
                'video_1' => NULL,
                'video_1_file' => NULL,
                'video_2' => NULL,
                'video_2_file' => NULL,
                'video_3' => NULL,
                'video_3_file' => NULL,
                'video_4' => NULL,
                'video_4_file' => NULL,
                'video_5' => NULL,
                'video_5_file' => NULL,
                'video_6' => NULL,
                'video_6_file' => NULL,
                'video_7' => NULL,
                'video_7_file' => NULL,
                'video_8' => NULL,
                'video_8_file' => NULL,
                'video_9' => NULL,
                'video_9_file' => NULL,
                'pdf_1' => NULL,
                'pdf_1_file' => NULL,
                'pdf_2' => NULL,
                'pdf_2_file' => NULL,
                'pdf_3' => NULL,
                'pdf_3_file' => NULL,
                'pdf_4' => NULL,
                'pdf_4_file' => NULL,
                'pdf_5' => NULL,
                'pdf_5_file' => NULL,
                'pdf_6' => NULL,
                'pdf_6_file' => NULL,
                'pdf_7' => NULL,
                'pdf_7_file' => NULL,
                'pdf_8' => NULL,
                'pdf_8_file' => NULL,
                'pdf_9' => NULL,
                'pdf_9_file' => NULL,
                'created' => $dateTime->i18nFormat('yyyy-MM-dd HH:mm:ss'),
                'created_by' => '1',
                'modified' => $dateTime->i18nFormat('yyyy-MM-dd HH:mm:ss'),
                'modified_by' => '1',
                'deleted' => NULL,
                'deleted_by' => NULL,
            ],
            [
                'id' => '3',
                'article_type_attribute_id' => '16',
                'uuid_id' => Text::uuid(),
                'foreign_key' => NULL,
                'value' => 'Marks Software GmbH',
                'link_1' => NULL,
                'link_2' => NULL,
                'link_3' => NULL,
                'link_4' => NULL,
                'link_5' => NULL,
                'link_6' => NULL,
                'link_7' => NULL,
                'link_8' => NULL,
                'link_9' => NULL,
                'image_1' => NULL,
                'image_1_file' => NULL,
                'image_2' => NULL,
                'image_2_file' => NULL,
                'image_3' => NULL,
                'image_3_file' => NULL,
                'image_4' => NULL,
                'image_4_file' => NULL,
                'image_5' => NULL,
                'image_5_file' => NULL,
                'image_6' => NULL,
                'image_6_file' => NULL,
                'image_7' => NULL,
                'image_7_file' => NULL,
                'image_8' => NULL,
                'image_8_file' => NULL,
                'image_9' => NULL,
                'image_9_file' => NULL,
                'video_1' => NULL,
                'video_1_file' => NULL,
                'video_2' => NULL,
                'video_2_file' => NULL,
                'video_3' => NULL,
                'video_3_file' => NULL,
                'video_4' => NULL,
                'video_4_file' => NULL,
                'video_5' => NULL,
                'video_5_file' => NULL,
                'video_6' => NULL,
                'video_6_file' => NULL,
                'video_7' => NULL,
                'video_7_file' => NULL,
                'video_8' => NULL,
                'video_8_file' => NULL,
                'video_9' => NULL,
                'video_9_file' => NULL,
                'pdf_1' => NULL,
                'pdf_1_file' => NULL,
                'pdf_2' => NULL,
                'pdf_2_file' => NULL,
                'pdf_3' => NULL,
                'pdf_3_file' => NULL,
                'pdf_4' => NULL,
                'pdf_4_file' => NULL,
                'pdf_5' => NULL,
                'pdf_5_file' => NULL,
                'pdf_6' => NULL,
                'pdf_6_file' => NULL,
                'pdf_7' => NULL,
                'pdf_7_file' => NULL,
                'pdf_8' => NULL,
                'pdf_8_file' => NULL,
                'pdf_9' => NULL,
                'pdf_9_file' => NULL,
                'created' => $dateTime->i18nFormat('yyyy-MM-dd HH:mm:ss'),
                'created_by' => '1',
                'modified' => $dateTime->i18nFormat('yyyy-MM-dd HH:mm:ss'),
                'modified_by' => '1',
                'deleted' => NULL,
                'deleted_by' => NULL,
            ],
            [
                'id' => '4',
                'article_type_attribute_id' => '16',
                'uuid_id' => Text::uuid(),
                'foreign_key' => NULL,
                'value' => 'Lukas Marks',
                'link_1' => NULL,
                'link_2' => NULL,
                'link_3' => NULL,
                'link_4' => NULL,
                'link_5' => NULL,
                'link_6' => NULL,
                'link_7' => NULL,
                'link_8' => NULL,
                'link_9' => NULL,
                'image_1' => NULL,
                'image_1_file' => NULL,
                'image_2' => NULL,
                'image_2_file' => NULL,
                'image_3' => NULL,
                'image_3_file' => NULL,
                'image_4' => NULL,
                'image_4_file' => NULL,
                'image_5' => NULL,
                'image_5_file' => NULL,
                'image_6' => NULL,
                'image_6_file' => NULL,
                'image_7' => NULL,
                'image_7_file' => NULL,
                'image_8' => NULL,
                'image_8_file' => NULL,
                'image_9' => NULL,
                'image_9_file' => NULL,
                'video_1' => NULL,
                'video_1_file' => NULL,
                'video_2' => NULL,
                'video_2_file' => NULL,
                'video_3' => NULL,
                'video_3_file' => NULL,
                'video_4' => NULL,
                'video_4_file' => NULL,
                'video_5' => NULL,
                'video_5_file' => NULL,
                'video_6' => NULL,
                'video_6_file' => NULL,
                'video_7' => NULL,
                'video_7_file' => NULL,
                'video_8' => NULL,
                'video_8_file' => NULL,
                'video_9' => NULL,
                'video_9_file' => NULL,
                'pdf_1' => NULL,
                'pdf_1_file' => NULL,
                'pdf_2' => NULL,
                'pdf_2_file' => NULL,
                'pdf_3' => NULL,
                'pdf_3_file' => NULL,
                'pdf_4' => NULL,
                'pdf_4_file' => NULL,
                'pdf_5' => NULL,
                'pdf_5_file' => NULL,
                'pdf_6' => NULL,
                'pdf_6_file' => NULL,
                'pdf_7' => NULL,
                'pdf_7_file' => NULL,
                'pdf_8' => NULL,
                'pdf_8_file' => NULL,
                'pdf_9' => NULL,
                'pdf_9_file' => NULL,
                'created' => $dateTime->i18nFormat('yyyy-MM-dd HH:mm:ss'),
                'created_by' => '1',
                'modified' => $dateTime->i18nFormat('yyyy-MM-dd HH:mm:ss'),
                'modified_by' => '1',
                'deleted' => NULL,
                'deleted_by' => NULL,
            ],
        ];

        $table = $this->table('article_type_attribute_choices');
        $table->insert($data)->save();
    }
}
