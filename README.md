## Enterprise Product Planning - склад товаров
+ Главная страница неавторизованного пользователя 
![welcome](/storage/images/welcome.png)

+ Авторизация
![login](/storage/images/login.png)

+ Список всех товаров
![товары](/storage/images/товары.png)

+ Добавить товар. При добавлении нового товара на почту отправляется уведомление
![add](/storage/images/add.png)

+ Редактировать товар
![edit](/storage/images/edit.png)

+ Карточка товара
![show](/storage/images/show.png)


#### Валидация полей ARTICLE

происходит в контроллере App\Http\Controllers\ProductController, методе validateFields

#### При создании продукта реализовать отправку на заданный в конфигурации Email (config(‘products.email’)) уведомления (Notification) о том, что продукт создан.
#### Уведомление должно отправляться через задачу (Job) в очереди (Queue).

Почта отправляется через класс \App\Mail\NewProductMail(Mailable)

#### Установка
+ composer install
+ npm install
+ php artisan queue:table
+ php artisan migrate --seed
+ создать файл .env по аналогии с .env.example
