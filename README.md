composer require doctrine/dbal # สำหรับการแก้ไข column migration
composer require laravel-ide-helper # สำหรับช่วย auto-complete (optional)
composer require barryvdh/laravel-debugbar # debug request (optional)

php artisan make:migration warehouses_table --create=warehouses

<!-- create -->

php artisan make:migration warehouse_features --create=warehouses

<!-- migrate -->

php artisan migrate --path=database/migrations/warehouse

<!-- refresh -->

php artisan migrate:refresh

<!-- delate table แล้วสร้างใหม่ -->

php artisan migrate:fresh

<!-- status -->

php artisan migrate:status

<!-- migration_database  -->
<!-- warehouse -->

php artisan make:migration warehouse --create=warehouses
php artisan make:migration warehouse_features --create=warehouse_features
php artisan make:migration warehouse_feature_assignments

<!-- zones -->

php artisan make:migration zones --create=zones
php artisan make:migration zone_features --create=zone_features
php artisan make:migration zone_feature_assignments --create=zone_feature_assignments

<!-- suppliers -->

php artisan make:migration suppliers --create=suppliers

<!-- products -->

php artisan make:migration products --create=products
php artisan make:migration product_supplier_assignments

<!-- locations -->

php artisan make:migration locations --create=locations
php artisan make:migration location_products --create=location_products

<!-- stock_movements -->

php artisan make:migration stock_movements --create=stock_movements
php artisan make:migration stock_movement_items --create=stock_movement_items

<!-- purchase_orders -->

php artisan make:migration purchase_orders --create=purchase_orders
php artisan make:migration purchase_order_items --create=purchase_order_items

<!-- customers -->

php artisan make:migration customers --create=customers

<!-- sales_orders -->

php artisan make:migration sales_orders --create=sales_orders
php artisan make:migration sales_order_items --create=sales_order_items

<!-- reservation_product -->

php artisan make:migration reservation_product --create=reservation_product

<!-- shipping_providers -->

php artisan make:migration shipping_providers --create=shipping_providers
php artisan make:migration shipping_quotes --create=shipping_quotes

<!-- Modal_database   -->

php artisan make:model Warehouse
php artisan make:model WarehouseFeature
php artisan make:model WarehouseFeatureAssignment
php artisan make:model Zone
php artisan make:model ZoneFeature
php artisan make:model ZoneFeatureAssignment
php artisan make:model Supplier
php artisan make:model Product
php artisan make:model ProductSupplierAssignment
php artisan make:model Location
php artisan make:model LocationProduct
php artisan make:model StockMovement
php artisan make:model StockMovementItem
php artisan make:model PurchaseOrder
php artisan make:model PurchaseOrderItem
php artisan make:model Customer
php artisan make:model SalesOrder
php artisan make:model SalesOrderItem
php artisan make:model ReservationProduct
php artisan make:model ShippingProvider
php artisan make:model ShippingQuote

<!-- seeder -->

php artisan db:seed
php artisan db:seed --class=WarehouseSeeder
php artisan make:seeder WarehouseSeeder
php artisan make:seeder WarehouseFeatureSeeder
php artisan make:seeder WarehouseFeatureAssignmentSeeder
php artisan make:seeder ZoneSeeder
php artisan make:seeder ZoneFeatureSeeder
php artisan make:seeder ZoneFeatureAssignmentSeeder
php artisan make:seeder SupplierSeeder
php artisan make:seeder ProductSeeder
php artisan make:seeder ProductSupplierAssignmentSeeder
php artisan make:seeder LocationSeeder
php artisan make:seeder LocationProductSeeder
php artisan make:seeder StockMovementSeeder
php artisan make:seeder StockMovementItemSeeder
php artisan make:seeder PurchaseOrderSeeder
php artisan make:seeder PurchaseOrderItemSeeder
php artisan make:seeder CustomerSeeder
php artisan make:seeder SalesOrderSeeder
php artisan make:seeder SalesOrderItemSeeder
php artisan make:seeder ReservationProductSeeder
php artisan make:seeder ShippingProviderSeeder
php artisan make:seeder ShippingQuoteSeeder
