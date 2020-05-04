## Usersテーブル

| Field | Type | Null | Key | Default | Extra          |
| ---- | ---- | ---- | ---- | ---- | ---- |
| id | int(11) | NO | PRI | NULL | auto_increment |
| family_name | varchar(30) | NO | | NULL | |
| given_name | varchar(30) | NO | | NULL | |
| body | text | YES | | NULL | |
| gender | int(11) | NO | | NULL | |
| phone | varchar(20) | NO | | NULL | |
| email | varchar(100) | NO | UNI | NULL | |
| created | datetime | NO | | NULL | |
| modified | datetime | NO | | NULL | |

#### データ例

| id | family_name                    | given_name | body                           | gender | phone                | email                               | created             | modified |
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | ---- | ---- |
|  1 | 田中 | 太郎 |                                | 1 | 012-3456-7891 | sample2@sample.com | 2020-05-02 19:47:23 | 2020-05-04 04:09:12 |
