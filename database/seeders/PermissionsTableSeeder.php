<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 39,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 40,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 41,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 42,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 43,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 44,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 45,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 46,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 47,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 48,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 49,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 50,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 51,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 52,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 53,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 54,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 55,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 56,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 57,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 58,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 59,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 60,
                'title' => 'asset_create',
            ],
            [
                'id'    => 61,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 62,
                'title' => 'asset_show',
            ],
            [
                'id'    => 63,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 64,
                'title' => 'asset_access',
            ],
            [
                'id'    => 65,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 66,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 67,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 68,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 69,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 70,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 71,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 72,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 73,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 74,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 75,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 76,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 77,
                'title' => 'task_create',
            ],
            [
                'id'    => 78,
                'title' => 'task_edit',
            ],
            [
                'id'    => 79,
                'title' => 'task_show',
            ],
            [
                'id'    => 80,
                'title' => 'task_delete',
            ],
            [
                'id'    => 81,
                'title' => 'task_access',
            ],
            [
                'id'    => 82,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 83,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 84,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 85,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 86,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 87,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 88,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 89,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 90,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 91,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 92,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 93,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 94,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 95,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 96,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 97,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 98,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 99,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 100,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 101,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 102,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 103,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 104,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 105,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 106,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 107,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 108,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 109,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 110,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 111,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 112,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 113,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 114,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 115,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 116,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 117,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 118,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 119,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 120,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 121,
                'title' => 'expense_create',
            ],
            [
                'id'    => 122,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 123,
                'title' => 'expense_show',
            ],
            [
                'id'    => 124,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 125,
                'title' => 'expense_access',
            ],
            [
                'id'    => 126,
                'title' => 'income_create',
            ],
            [
                'id'    => 127,
                'title' => 'income_edit',
            ],
            [
                'id'    => 128,
                'title' => 'income_show',
            ],
            [
                'id'    => 129,
                'title' => 'income_delete',
            ],
            [
                'id'    => 130,
                'title' => 'income_access',
            ],
            [
                'id'    => 131,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 132,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 133,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 134,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 135,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 136,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 137,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 138,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 139,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 140,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 141,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 142,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 143,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 144,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 145,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 146,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 147,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 148,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 149,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 150,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 151,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 152,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 153,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 154,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 155,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 156,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 157,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 158,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 159,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 160,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 161,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 162,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 163,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 164,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 165,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 166,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 167,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 168,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
