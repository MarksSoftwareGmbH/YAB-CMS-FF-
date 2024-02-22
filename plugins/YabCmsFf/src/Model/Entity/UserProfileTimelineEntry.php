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
namespace YabCmsFf\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserProfileTimelineEntry Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $uuid_id
 * @property string|null $foreign_key
 * @property int $entry_no
 * @property int $entry_ref_no
 * @property \Cake\I18n\Time $entry_date
 * @property string $entry_type
 * @property string $entry_title
 * @property string $entry_subtitle
 * @property string $entry_body
 * @property string $entry_link_1
 * @property string $entry_link_2
 * @property string $entry_link_3
 * @property string $entry_link_4
 * @property string $entry_link_5
 * @property string $entry_link_6
 * @property string $entry_link_7
 * @property string $entry_link_8
 * @property string $entry_link_9
 * @property string $entry_image_1
 * @property string $entry_image_1_file
 * @property string $entry_image_2
 * @property string $entry_image_2_file
 * @property string $entry_image_3
 * @property string $entry_image_3_file
 * @property string $entry_image_4
 * @property string $entry_image_4_file
 * @property string $entry_image_5
 * @property string $entry_image_5_file
 * @property string $entry_image_6
 * @property string $entry_image_6_file
 * @property string $entry_image_7
 * @property string $entry_image_7_file
 * @property string $entry_image_8
 * @property string $entry_image_8_file
 * @property string $entry_image_9
 * @property string $entry_image_9_file
 * @property string $entry_video_1
 * @property string $entry_video_1_file
 * @property string $entry_video_2
 * @property string $entry_video_2_file
 * @property string $entry_video_3
 * @property string $entry_video_3_file
 * @property string $entry_video_4
 * @property string $entry_video_4_file
 * @property string $entry_video_5
 * @property string $entry_video_5_file
 * @property string $entry_video_6
 * @property string $entry_video_6_file
 * @property string $entry_video_7
 * @property string $entry_video_7_file
 * @property string $entry_video_8
 * @property string $entry_video_8_file
 * @property string $entry_video_9
 * @property string $entry_video_9_file
 * @property string $entry_pdf_1
 * @property string $entry_pdf_1_file
 * @property string $entry_pdf_2
 * @property string $entry_pdf_2_file
 * @property string $entry_pdf_3
 * @property string $entry_pdf_3_file
 * @property string $entry_pdf_4
 * @property string $entry_pdf_4_file
 * @property string $entry_pdf_5
 * @property string $entry_pdf_5_file
 * @property string $entry_pdf_6
 * @property string $entry_pdf_6_file
 * @property string $entry_pdf_7
 * @property string $entry_pdf_7_file
 * @property string $entry_pdf_8
 * @property string $entry_pdf_8_file
 * @property string $entry_pdf_9
 * @property string $entry_pdf_9_file
 * @property string $entry_guitar_pro
 * @property string $entry_guitar_pro_file
 * @property int $view_counter
 * @property \Cake\I18n\Time $created
 * @property int $created_by
 * @property \Cake\I18n\Time $modified
 * @property int $modified_by
 * @property \Cake\I18n\Time $deleted
 * @property int $deleted_by
 *
 * @property \YabCmsFf\Model\Entity\User $user
 */
class UserProfileTimelineEntry extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected array $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
