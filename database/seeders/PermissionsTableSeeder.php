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
                'title' => 'task_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'task_create',
            ],
            [
                'id'    => 29,
                'title' => 'task_edit',
            ],
            [
                'id'    => 30,
                'title' => 'task_show',
            ],
            [
                'id'    => 31,
                'title' => 'task_delete',
            ],
            [
                'id'    => 32,
                'title' => 'task_access',
            ],
            [
                'id'    => 33,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 34,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 35,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 36,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 37,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 38,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 39,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 40,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 41,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 42,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 43,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 44,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 45,
                'title' => 'product_create',
            ],
            [
                'id'    => 46,
                'title' => 'product_edit',
            ],
            [
                'id'    => 47,
                'title' => 'product_show',
            ],
            [
                'id'    => 48,
                'title' => 'product_delete',
            ],
            [
                'id'    => 49,
                'title' => 'product_access',
            ],
            [
                'id'    => 50,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 51,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 52,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 53,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 54,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 55,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 56,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 57,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 58,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 59,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 60,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 61,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 62,
                'title' => 'currency_create',
            ],
            [
                'id'    => 63,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 64,
                'title' => 'currency_show',
            ],
            [
                'id'    => 65,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 66,
                'title' => 'currency_access',
            ],
            [
                'id'    => 67,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 68,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 69,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 70,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 71,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 72,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 73,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 74,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 75,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 76,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 77,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 78,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 79,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 80,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 81,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 82,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 83,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 84,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 85,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 86,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 87,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 88,
                'title' => 'client_create',
            ],
            [
                'id'    => 89,
                'title' => 'client_edit',
            ],
            [
                'id'    => 90,
                'title' => 'client_show',
            ],
            [
                'id'    => 91,
                'title' => 'client_delete',
            ],
            [
                'id'    => 92,
                'title' => 'client_access',
            ],
            [
                'id'    => 93,
                'title' => 'project_create',
            ],
            [
                'id'    => 94,
                'title' => 'project_edit',
            ],
            [
                'id'    => 95,
                'title' => 'project_show',
            ],
            [
                'id'    => 96,
                'title' => 'project_delete',
            ],
            [
                'id'    => 97,
                'title' => 'project_access',
            ],
            [
                'id'    => 98,
                'title' => 'note_create',
            ],
            [
                'id'    => 99,
                'title' => 'note_edit',
            ],
            [
                'id'    => 100,
                'title' => 'note_show',
            ],
            [
                'id'    => 101,
                'title' => 'note_delete',
            ],
            [
                'id'    => 102,
                'title' => 'note_access',
            ],
            [
                'id'    => 103,
                'title' => 'document_create',
            ],
            [
                'id'    => 104,
                'title' => 'document_edit',
            ],
            [
                'id'    => 105,
                'title' => 'document_show',
            ],
            [
                'id'    => 106,
                'title' => 'document_delete',
            ],
            [
                'id'    => 107,
                'title' => 'document_access',
            ],
            [
                'id'    => 108,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 109,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 110,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 111,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 112,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 113,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 114,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 115,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 116,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 117,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 118,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 119,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 120,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 121,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 122,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 123,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 124,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 125,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 126,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 127,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 128,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 129,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 130,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 131,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 132,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 133,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 134,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 135,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 136,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 137,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 138,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 139,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 140,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 141,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 142,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 143,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 144,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 145,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 146,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 147,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 148,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 149,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 150,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 151,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 152,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 153,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 154,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 155,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 156,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 157,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 158,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 159,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 160,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 161,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 162,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 163,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 164,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 165,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 166,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 167,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 168,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 169,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 170,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 171,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 172,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 173,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 174,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 175,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 176,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 177,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 178,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 179,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 180,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 181,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 182,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 183,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 184,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 185,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 186,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 187,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 188,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 189,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 190,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 191,
                'title' => 'asset_create',
            ],
            [
                'id'    => 192,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 193,
                'title' => 'asset_show',
            ],
            [
                'id'    => 194,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 195,
                'title' => 'asset_access',
            ],
            [
                'id'    => 196,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 197,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 198,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 199,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 200,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 201,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 202,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 203,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 204,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 205,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 206,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 207,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 208,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 209,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 210,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 211,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 212,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 213,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 214,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 215,
                'title' => 'team_create',
            ],
            [
                'id'    => 216,
                'title' => 'team_edit',
            ],
            [
                'id'    => 217,
                'title' => 'team_show',
            ],
            [
                'id'    => 218,
                'title' => 'team_delete',
            ],
            [
                'id'    => 219,
                'title' => 'team_access',
            ],
            [
                'id'    => 220,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 221,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 222,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 223,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 224,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 225,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 226,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 227,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 228,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 229,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 230,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 231,
                'title' => 'expense_create',
            ],
            [
                'id'    => 232,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 233,
                'title' => 'expense_show',
            ],
            [
                'id'    => 234,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 235,
                'title' => 'expense_access',
            ],
            [
                'id'    => 236,
                'title' => 'income_create',
            ],
            [
                'id'    => 237,
                'title' => 'income_edit',
            ],
            [
                'id'    => 238,
                'title' => 'income_show',
            ],
            [
                'id'    => 239,
                'title' => 'income_delete',
            ],
            [
                'id'    => 240,
                'title' => 'income_access',
            ],
            [
                'id'    => 241,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 242,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 243,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 244,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 245,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 246,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
