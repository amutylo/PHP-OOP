-- noinspection SqlNoDataSourceInspectionForFile

use `invoice_app`;

-- Build the tables
source /scripts/schema/status.sql
source /scripts/schema/customer.sql
source /scripts/schema/invoice.sql
source /scripts/schema/invoice_item.sql

-- Insert data
source /scripts/data/status.sql
