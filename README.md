#Установка проекта

### Способ №1
###1. Клонируем репозиторий
```html
git clone
```

###3. Запускаем composer.
```html
php composer.phar self-update
php composer.phar update
```

### Способ №2

###1. Скачиваем composer.phar - открываем терминал в папке куда нужно сохранить composer и вводим команду
```html
php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"
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

привязка локальной ветки к удаленной

```html
git checkout -b [<em>ветка</em>] [<em>удал. сервер</em>]/[<em>ветка</em>]
```

обновление данных о удаленном репозитории

данные об удаленных репозиториях:
```html
git remote update
```