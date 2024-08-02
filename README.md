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


+ Валидация полей ARTICLE происходит в контроллере ``App\Http\Controllers\ProductController``, методе ``validateFields``.
+ Уведомление о новом товаре отправлятся на почту с помощью класса ``\App\Mail\NewProductMail`` через задачу ``\App\Jobs\SendEmailJob`` в очереди (Queue). Скрипт очереди - ``enterplan-queue.php``

#### Установка
+ composer install
+ npm install
+ php artisan queue:table
+ php artisan migrate --seed
+ создать файл .env по аналогии с .env.example
