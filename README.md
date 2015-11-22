#Установка проекта (способ №1)

###1. Клонируем репозиторий
```html
git clone
```

###3. Запускаем composer.
```html
php composer.phar self-update
php composer.phar update
```

###2. Устанавливаем yii2 advanced

```html
php composer.phar create-project yiisoft/yii2-app-advanced advanced 2.0.6
```
###3. Запускаем composer
```html
php composer.phar update
если возникает ошибка Fatal error: Call to undefined method Fxp\Composer\AssetPlugin\Package\Version\VersionParser::parseLinks() in ..
то удаляем папку vendor и дделаем update
 line 272

```
###4. Скачиваем файлы с гит
```html
Заходим в корень проекта и делаем init
```

###5. Скачиваем файлы с гит

```html
git init
git remote add origin git@github.com:logs12/blog.git
git checkout -b origin origin/master
git pull
```

###Шпаргалка по командам Git

просмотр удаленных веток
```html
git branch -a
```
просмотр локальных веток
```html
git branch
```