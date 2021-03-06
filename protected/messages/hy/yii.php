<?php 
//Core Message translation
$myown = array (
  '&lt; Previous' => '&lt; Նախորդ',
  '&lt;&lt; First' => '&lt;&lt; Առաջին',
  'Go to page: ' => 'Անցնել հետևյալ էջ` ',
  'Last &gt;&gt;' => 'Վերջին &gt;&gt;',
  'Next &gt;' => 'Հաջորդ &gt;',
  'The asset "{asset}" to be published does not exist.' => 'asset "{asset}"-ը պատկերելու համար անհրաժեշտ պարագաները բացակայում են:',
  'The module path "{path}" is not a valid directory.' => '"{path}" մոդուլի ճանապարհը չի հանդիսանում թղթապանակ:',
  'Unable to count records with composite primary keys. Please explicitly specify the SELECT option in the query criteria.' => 'Գրառումը անհնար է հաշվարկել հիմնական բաղկացուցիչ բանալիներով: Ակնհայտորեն ցույց տվեք պայմանը SELECT-ի պայմանի ստուգման մասում:',
  'Unable to resolve the request "{route}".' => '"{route}" հարցումը հնարավոր չի իրականացնել:',
  '{class} does not have a method named "{name}".' => '{class} կլասը չի պարունակում "{name}" մեթոդ:',
  '{class} does not have attribute "{attribute}".' => '{class} կլասը չի պարունակում "{attribute}" ատրիբուտ:',
  '{class} does not have relation "{name}".' => '{class} կլասը չի պարունակում "{name}" կապը:',
  '{class} does not support fetching all table names.' => '{class} կլասը չի ապահովում ընտրություն բոլոր աղյուսակների անուններով:',
  '"{path}" is not a valid directory.' => '"{path}" ճանապարհը չի հանդիսանում իրական թղթապանակ:',
  'Active Record requires a "db" CDbConnection application component.' => 'ActiveRecord -ը պահանջում է "db" CDbConnection ծրագրի կոմպոնենտը',
  'Active record "{class}" has an invalid configuration for relation "{relation}". It must specify the relation type, the related active record class and the foreign key.' => 'Active record "{class}" կլասի "{relation}" հարաբերությունը սխալ է կոնֆիգուրացված: Դուք պետք է նկարագրեք հարաբերության տիպը, հարաբերության հետ կապված active record կլասը և արտաքին բանալին:',
  'Active record "{class}" is trying to select an invalid column "{column}". Note, the column must exist in the table or be an expression with alias.' => 'ActiveRecord "{class}" пытается выбрать недопустимый столбец "{column}". Примечание: столбец должен существовать в таблице или являться выражением с алиасом.',
  'Alias "{alias}" is invalid. Make sure it points to an existing directory or file.' => 'Неправильный алиас "{alias}". Убедитесь, что он указывает на существующую директорию или файл.',
  'Application base path "{path}" is not a valid directory.' => 'Базовый (base) путь приложения "{path}" не является директорией.',
  'Application runtime path "{path}" is not valid. Please make sure it is a directory writable by the Web server process.' => 'Рабочий (runtime) путь приложения "{path}" задан неверно. Удостоверьтесь, что директория доступна для записи пользователю, под которым запущен веб-сервер.',
  'Authorization item "{item}" has already been assigned to user "{user}".' => 'Элемент (item) авторизации "{item}" уже назначен пользователю "{user}".',
  'CApcCache requires PHP apc extension to be loaded.' => 'CApcCache требует загруженного расширения PHP APC.',
  'CAssetManager.basePath "{path}" is invalid. Please make sure the directory exists and is writable by the Web server process.' => 'Путь CAssetManager.basePath "{path}" задан неверно. Удостоверьтесь, что директория существует и доступна для записи пользователю, под которым запущен веб-сервер.',
  'CCacheHttpSession.cacheID is invalid. Please make sure "{id}" refers to a valid cache application component.' => 'Идентификатор CCacheHttpSession.cacheID задан неверно. Удостоверьтесь, что "{id}" соответствует существующему компоненту кэша приложения.',
  'CCaptchaValidator.action "{id}" is invalid. Unable to find such an action in the current controller.' => 'Действие CCaptchaValidator.action "{id}" задано неверно: действия не найдено в текущем контроллере.',
  'CDbAuthManager.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'Идентификатор CDbAuthManager.connectionID "{id}" задан неверно. Удостоверьтесь, что он соответствует идентификатору (ID) компонента CDbConnection вашего приложения.',
  'CDbCache.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'Идентификатор CDbCache.connectionID "{id}" задан неверно. Удостоверьтесь, что он соответствует идентификатору (ID) компонента CDbConnection вашего приложения.',
  'CDbCacheDependency.sql cannot be empty.' => 'Файл CDbCacheDependency.sql должен содержать какие-либо запросы.',
  'CDbCommand failed to execute the SQL statement: {error}' => 'CDbCommand не удалось исполнить SQL-запрос: {error}',
  'CDbCommand failed to prepare the SQL statement: {error}' => 'CDbCommand не удалось подготовить SQL-запрос: {error}',
  'CDbConnection does not support reading schema for {driver} database.' => 'CDbConnection не поддерживает чтения из базы данных {driver}.',
  'CDbConnection failed to open the DB connection: {error}' => 'CDbConnection не удалось открыть соединение с базой данных: {error}',
  'CDbConnection is inactive and cannot perform any DB operations.' => 'Соединение CDbConnection не активно, операции над базой данных невозможны.',
  'CDbConnection.connectionString cannot be empty.' => 'Параметр CDbConnection.connectionString должен быть заполнен.',
  'CDbDataReader cannot rewind. It is a forward-only reader.' => 'Компонент CDbDataReader не поддерживает обратное чтение. Этот компонент только для чтения в прямом направлении.',
  'CDbHttpSession.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'Идентификатор CDbHttpSession.connectionID "{id}" задан неверно. Удостоверьтесь, что он соответствует идентификатору (ID) компонента CDbConnection вашего приложения.',
  'CDbLogRoute requires database table "{table}" to store log messages.' => 'Компоненту CDbLogRoute требуется доступ к таблице "{table}" для хранения журнала событий.',
  'CDbLogRoute.connectionID "{id}" does not point to a valid CDbConnection application component.' => 'Идентификатор CDbLogRoute.connectionID "{id}" указывает на неверный компонент CDbConnection вашего приложения.',
  'CDbMessageSource.connectionID is invalid. Please make sure "{id}" refers to a valid database application component.' => 'CDbMessageSource.connectionID указан неверно. Удостоверьтесь, что "{id}" указывает на правильный компонент для работы с базой данных вашего приложения.',
  'CDbTransaction is inactive and cannot perform commit or roll back operations.' => 'Компонент CDbTransaction не активен, операции фиксации (commit) и отката (roll back) не могут быть совершены.',
  'CDirectoryCacheDependency.directory cannot be empty.' => 'Параметр CDirectoryCacheDependency.directory должен быть заполнен.',
  'CFileCacheDependency.fileName cannot be empty.' => 'Параметр CFileCacheDependency.fileName должен быть заполнен.',
  'CFileLogRoute.logPath "{path}" does not point to a valid directory. Make sure the directory exists and is writable by the Web server process.' => 'Путь CFileLogRoute.logPath "{path}" задан неверно. Удостоверьтесь, что директория существует и доступна для записи пользователю, под которым запущен веб-сервер.',
  'CFilterChain can only take objects implementing the IFilter interface.' => 'CFilterChain может содержать только объекты реализующие интерфейс IFilter.',
  'CFlexWidget.baseUrl cannot be empty.' => 'Параметр CFlexWidget.baseUrl должен быть заполнен.',
  'CFlexWidget.name cannot be empty.' => 'Параметр CFlexWidget.name должен быть заполнен.',
  'CGlobalStateCacheDependency.stateName cannot be empty.' => 'Параметр CGlobalStateCacheDependency.stateName должен быть заполнен.',
  'CHttpCookieCollection can only hold CHttpCookie objects.' => 'CHttpCookieCollection может содержать только объекты типа CHttpCookie.',
  'CHttpRequest is unable to determine the entry script URL.' => 'Компоненту CHttpRequest не удалось определить URL входного скрипта.',
  'CHttpRequest is unable to determine the path info of the request.' => 'Компоненту CHttpRequest не удалось определить информацию о пути, содержащуюся в запросе.',
  'CHttpRequest is unable to determine the request URI.' => 'Компоненту CHttpRequest не удалось определить URI запроса.',
  'CHttpSession.cookieMode can only be "none", "allow" or "only".' => 'Параметр CHttpSession.cookieMode может принимать только значения "none", "allow" или "only".',
  'CHttpSession.gcProbability "{value}" is invalid. It must be an integer between 0 and 100.' => 'Значение параметра CHttpSession.gcProbability "{value}" задано неверно. Необходимо указать число от 0 до 100.',
  'CHttpSession.savePath "{path}" is not a valid directory.' => 'Путь CHttpSession.savePath "{path}" не является директорией.',
  'CMemCache requires PHP memcache extension to be loaded.' => 'Компонент CMemCache требует расширения PHP memcache.',
  'CMemCache server configuration must be an array.' => 'Конфигурация сервера CMemCache должна быть массивом.',
  'CMemCache server configuration must have "host" value.' => 'Конфигурация сервера CMemCache должна содержать значение "host".',
  'CMultiFileUpload.name is required.' => 'Необходимо указать параметр CMultiFileUpload.name.',
  'CProfileLogRoute found a mismatching code block "{token}". Make sure the calls to Yii::beginProfile() and Yii::endProfile() be properly nested.' => 'Компонент CProfileLogRoute обнаружил неверный код "{token}". Удостоверьтесь, что вложенность вызовов Yii::beginProfile() и Yii::endProfile() соблюдается.',
  'CProfileLogRoute.report "{report}" is invalid. Valid values include "summary" and "callstack".' => 'Параметр CProfileLogRoute.report "{report}" задан неверно. Поддерживаются значения "summary" и "callstack".',
  'CSecurityManager requires PHP mcrypt extension to be loaded in order to use data encryption feature.' => 'Для использования возможности шифрования данных компоненту CSecurityManager требуется PHP-расширение mcrypt.',
  'CSecurityManager.encryptionKey cannot be empty.' => 'Параметр CSecurityManager.encryptionKey должен быть заполнен.',
  'CSecurityManager.validation must be either "MD5" or "SHA1".' => 'Параметр CSecurityManager.validation может принимать только значения "MD5" или "SHA1".',
  'CSecurityManager.validationKey cannot be empty.' => 'Параметр CSecurityManager.validationKey должен быть заполнен.',
  'CTypedList<{type}> can only hold objects of {type} class.' => 'CTypedList<{type}> может содержать только объекты класса {type}.',
  'CUrlManager.UrlFormat must be either "path" or "get".' => 'Параметр CUrlManager.UrlFormat может принимать только значения "path" или "get".',
  'CXCache requires PHP XCache extension to be loaded.' => 'Для работы компонента CXCache необходимо PHP-расширение XCache.',
  'Cache table "{tableName}" does not exist.' => 'Таблица для кэша "{tableName}" не существует.',
  'Cannot add "{child}" as a child of "{name}". A loop has been detected.' => 'Добавление элемента "{child}" в качестве потомка "{name}" невозможно, обнаружен бесконечный цикл.',
  'Cannot add "{child}" as a child of "{parent}". A loop has been detected.' => 'Добавление элемента "{child}" в качестве потомка "{parent} невозможно, обнаружен бесконечный цикл.',
  'Cannot add "{name}" as a child of itself.' => 'Элемент "{name}" не может стать потомком для самого себя.',
  'Cannot add an item of type "{child}" to an item of type "{parent}".' => 'Нельзя добавить элемент типа "{child}" к элементу типа "{parent}".',
  'Either "{parent}" or "{child}" does not exist.' => 'Либо "{parent}", либо "{child}" не существует.',
  'Error: Table "{table}" does not have a primary key.' => 'Ошибка: В таблице "{table}" отсутствует первичный ключ.',
  'Error: Table "{table}" has a composite primary key which is not supported by crud command.' => 'Ошибка: Таблица "{table}" содержит составной первичный ключ, работа с которым не поддерживается командами CRUD.',
  'Event "{class}.{event}" is attached with an invalid handler "{handler}".' => 'Событие "{class}.{event}" привязано неверным обработчиком "{handler}".',
  'Event "{class}.{event}" is not defined.' => 'Событие "{class}.{event}" не определено.',
  'Failed to write the uploaded file "{file}" to disk.' => 'Не удалось записать загруженный файл "{file}" на диск.',
  'File upload was stopped by extension.' => 'Загрузка файла прервана расширением.',
  'Filter "{filter}" is invalid. Controller "{class}" does have the filter method "filter{filter}".' => 'Фильтр "{filter}" указан неверно. В коде контроллер "{class}" метод фильтра "filter{filter}" не определен.',
  'Get a new code' => 'Ստանալ նոր կոդ',
  'Invalid MO file revision: {revision}.' => 'Անիրական MO ֆայլի վերսիա` {revision}:',
  'Invalid MO file: {file} (magic: {magic}).' => 'Սխալ MO ֆայլում` {file} (Magic: {magic}).',
  'Invalid enumerable value "{value}". Please make sure it is among ({enum}).' => '"{value}" արժեքը տրված է անիրական: Իրական են հետևյալ արժեքները` ({enum}):',
  'List data must be an array or an object implementing Traversable.' => 'Ցուցակը պետք է ներկայացվի զանգվածի կամ օյեկտի տեսքով, որը կիրականացնի Traversable ինտերֆեյս:',
  'List index "{index}" is out of bound.' => '"{index}" ցուցակի արժեքը դուրս է գալիս իր սահմաններից:',
  'Login Required' => 'Անհրաժեշտ է ավտորիզացիա:',
  'Map data must be an array or an object implementing Traversable.' => 'Քարտեզը պետք է ներկայացվի զանգվածի կամ օյեկտի տեսքով, որը կիրականացնի Traversable ինտերֆեյս:',
  'Missing the temporary folder to store the uploaded file "{file}".' => '"{file}" բեռնավորվող ֆայլի ժամանակավոր թղթապանակը գոյություն չունի:',
  'No columns are being updated for table "{table}".' => 'Нет столбцов подлежащих обновлению в таблице "{table}".',
  'No counter columns are being updated for table "{table}".' => 'Нет столбцов-счетчиков подлежащих обновлению в таблице "{table}".',
  'Object configuration must be an array containing a "class" element.' => 'Конфигурация объекта должна быть представлена массивом, содержащим элемент "class".',
  'Please fix the following input errors:' => 'Անհրաժեշտ է ուղել հետևյալ սխալները`',
  'Property "{class}.{property}" is not defined.' => '"{class}.{property}" պրոպերտին հայտարարված չի:',
  'Property "{class}.{property}" is read only.' => '"{class}.{property}" պրոպերտին հասանելի է միայն կարդացման համար:',
  'Queue data must be an array or an object implementing Traversable.' => 'Запрос должен быть представлен массивом или объектом, реализующим интерфейс Traversable.',
  'Relation "{name}" is not defined in active record class "{class}".' => 'Отношение "{name}" не было определено в active record классе "{class}".',
  'Stack data must be an array or an object implementing Traversable.' => 'Стек должен быть представлен массивом или объектом, реализующим интерфейс Traversable.',
  'Table "{table}" does not have a column named "{column}".' => 'Таблица "{table}" не содержит столбца "{column}".',
  'Table "{table}" does not have a primary key defined.' => 'Первичный ключ для таблицы "{table}" не определен.',
  'The "filter" property must be specified with a valid callback.' => 'Свойство "filter" должно быть определено правильным обратным вызовом (callback).',
  'The "pattern" property must be specified with a valid regular expression.' => 'Свойство "pattern" должно быть определено правильным регулярным выражением.',
  'The CSRF token could not be verified.' => 'Անհնար է հայտարարել CSRF-ը:',
  'The URL pattern "{pattern}" for route "{route}" is not a valid regular expression.' => 'URL-шаблон "{pattern}" для пути "{route}" не является верным регулярным выражением.',
  'The active record cannot be deleted because it is new.' => 'Невозможно удалить запись active record из-за того, что она новая.',
  'The active record cannot be inserted to database because it is not new.' => 'Невозможно добавить запись active record в базу данных из-за того, что она не новая.',
  'The active record cannot be updated because it is new.' => 'Հնարավոր չի թարմացնել active record գրառումը քանի որ այն նոր է:',
  'The column "{column}" is not a foreign key in table "{table}".' => 'Столбец "{column}" не является внешним ключом таблицы "{table}".',
  'The command path "{path}" is not a valid directory.' => '"{path}" հրամանային ճանապարհը չի հանդիսանում թղթապանակ:',
  'The controller path "{path}" is not a valid directory.' => '"{path}" կոնտրոլերների ճանապարհը չի հանդիսանում թղթապանակ:',
  'The file "{file}" cannot be uploaded. Only files with these extensions are allowed: {extensions}.' => 'Файл "{file}" не может быть загружен. Разрешена загрузка файлов только со следующими расширениями: {extensions}.',
  'The file "{file}" is too large. Its size cannot exceed {limit} bytes.' => '"{file}" ֆայլի չափը չափազանց մեծ է, այն չպետք է գերազանցի {limit} բայթը',
  'The file "{file}" is too small. Its size cannot be smaller than {limit} bytes.' => '"{file}" ֆայլի չափը շատ փոքր է, այն չպետք է լինի փոքր քան {limit} բայթը.',
  'The file "{file}" was only partially uploaded.' => '"{file}" ֆայլը չի բեռնավորվել ամբողջությամբ:',
  'The first element in a filter configuration must be the filter class.' => 'Ֆիլտրի կոնֆիգուրացիայում առաջին էլեմենտը պետք է լինի նրա կլասը:',
  'The item "{name}" does not exist.' => '"{name}" էլեմենտը գոյություն չունի:',
  'The item "{parent}" already has a child "{child}".' => '"{parent}" էլեմենտը արդեն ունի "{child}" սերունդ',
  'The layout path "{path}" is not a valid directory.' => '"{path}" շաբլոնի ճանապարհը չի հանդիսանում իրական թղթապանակ:',
  'The list is read only.' => 'Ցուցակը նախատեսված է միայն կարդացման համար:',
  'The map is read only.' => 'Քարտեզը նախատեսված է միայն կարդացման համար:',
  'The pattern for 12 hour format must be "h" or "hh".' => 'Шаблон для 12-ти часового формата времени: "h", либо "hh".',
  'The pattern for 24 hour format must be "H" or "HH".' => 'Шаблон для 12-ти часового формата времени: "H", либо "HH".',
  'The pattern for AM/PM marker must be "a".' => 'Шаблон маркера AM/PM: "a".',
  'The pattern for day in month must be "F".' => 'Шаблон для дня месяца: "F".',
  'The pattern for day in year must be "D", "DD" or "DDD".' => 'Шаблон для дня в году: "D", "DD", либо "DDD".',
  'The pattern for day of the month must be "d" or "dd".' => 'Шаблон для дня месяца: "d", либо "dd".',
  'The pattern for day of the week must be "E", "EE", "EEE", "EEEE" or "EEEEE".' => 'Шаблон для дня недели:"E", "EE", "EEE", "EEEE", либо "EEEEE".',
  'The pattern for era must be "G", "GG", "GGG", "GGGG" or "GGGGG".' => 'Шаблон для эры: "G", "GG", "GGG", "GGGG", либо "GGGGG".',
  'The pattern for hour in AM/PM must be "K" or "KK".' => 'Шаблон для часа в формате AM/PM: "K", либо "KK".',
  'The pattern for hour in day must be "k" or "kk".' => 'Шаблон для часа в дне: "k", либо "kk".',
  'The pattern for minutes must be "m" or "mm".' => 'Шаблон для минут: "m", либо "mm".',
  'The pattern for month must be "M", "MM", "MMM", or "MMMM".' => 'Шаблон имени месяца: "M", "MM", "MMM", либо "MMMM".',
  'The pattern for seconds must be "s" or "ss".' => 'Шаблон для секунд: "s", либо "ss".',
  'The pattern for time zone must be "z" or "v".' => 'Шаблон для временной зоны: "z", либо "v".',
  'The pattern for week in month must be "W".' => 'Шаблон недели в месяце: "W".',
  'The pattern for week in year must be "w".' => 'Шаблон недели в году: "w".',
  'The queue is empty.' => 'Հերթը դատարկ է:',
  'The relation "{relation}" in active record class "{class}" is not specified correctly: the join table "{joinTable}" given in the foreign key cannot be found in the database.' => 'Отношение "{relation}", определенное в записи active record класса "{class}" ошибочно: в базе данных нет включаемой таблицы "{joinTable}", упомянутой во внешнем ключе.',
  'The relation "{relation}" in active record class "{class}" is specified with an incomplete foreign key. The foreign key must consist of columns referencing both joining tables.' => 'Отношение "{relation}", определенное в записи active record класса "{class}", определено неполным внешним ключом. Внешний ключ должен состоять из столбцов, относящихся к обоим объединяемым таблицам.',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key "{key}". The foreign key does not point to either joining table.' => 'Отношение "{relation}", определенное в записи active record класса "{class}", определено неверным внешним ключом "{key}". Внешний ключ не указывает ни на одну из объединяемых таблиц.',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key. The format of the foreign key must be "joinTable(fk1,fk2,...)".' => 'Отношение "{relation}", определенное в записи active record класса "{class}", определено неверным внешним ключом. Формат внешнего ключа должен быть таким: "joinTable(fk1,fk2,...)".',
  'The requested view "{name}" is not found.' => 'Запрошенное представление (view) "{view}" не найдено.',
  'The stack is empty.' => 'Ծրագրի ստեկը դատարկ է:',
  'The system is unable to find the requested action "{action}".' => 'Համակարգին չի հաջողվել գտնել պահանջվող գործողությունը` "{action}".',
  'The system view path "{path}" is not a valid directory.' => '"{path}" պատկերման (view) ճանապարհը չի հանդիսանում թղթապանակ:',
  'The table "{table}" for active record class "{class}" cannot be found in the database.' => 'Таблица "{table}", упомянутая в записи active record класса "{class}", не найдена в базе данных.',
  'The value for the primary key "{key}" is not supplied when querying the table "{table}".' => 'При обращении к таблице "{table}" не указано значение первичного ключа "{key}".',
  'The verification code is incorrect.' => 'Վերաստուգման կոդը սխալ է:',
  'The view path "{path}" is not a valid directory.' => 'Պատկերման սխալ ճանապարհ "{path}".',
  'Theme directory "{directory}" does not exist.' => '"{directory}" թեմայի (theme) ճանապարհը գոյություն չունի:',
  'This content requires the <a href="http://www.adobe.com/go/getflash/">Adobe Flash Player</a>.' => 'Անհրաժեշտ է <a href="http://www.adobe.com/go/getflash/">Adobe Flash Player</a>-ի առկայություն:',
  'Unable to add an item whose name is the same as an existing item.' => 'Անհնար է ավելացնել էլեմենտ, տվյալ անունով էլեմենտ արդեն օգտագործվում է:',
  'Unable to change the item name. The name "{name}" is already used by another item.' => 'ԱՆհնար է փոփոխել էլեմենտի անունը: "{name}" անունը օգտագործվում է այլ էլէմենտի կողմից:',
  'Unable to create application state file "{file}". Make sure the directory containing the file exists and is writable by the Web server process.' => 'Ծրագրի իրավիճակի ֆայլը "{file}" չի ստեղծվել: Համոզվեք, որ թղթապանակը գոյություն ունի և հասանելի է web server-ի օգտագործողին (user) գրանցման համար:',
  'Unable to lock file "{file}" for reading.' => '"{file}" ֆայլը հնարավոր չի բլոկավորել կարդացման համար:',
  'Unable to lock file "{file}" for writing.' => '"{file}"  ֆայլը հնարավոր չի բլոկավորել գրանցման համար:',
  'Unable to read file "{file}".' => '"{file}" ֆայլը անհնար է կարդալ:',
  'Unable to replay the action "{object}.{method}". The method does not exist.' => 'Հնարավոր չի իրականացնել "{object}.{method}" գործողությունը: Նշված մեթոդը գոյություն չունի:',
  'Unable to write file "{file}".' => '"{file}" ֆայլը անհնար է գրանցել:',
  'Unknown authorization item "{name}".' => 'Անհայտ ավտորիզացման էլեմենտ "{name}":',
  'Unrecognized locale "{locale}".' => 'Անհայտ լոկալ "{locale}":',
  'View file "{file}" does not exist.' => '"{file}" պատկերման (view) ֆայլը գոյություն չունի:',
  'Yii application can only be created once.' => 'Yii ծրագիրը կարելի է ստեղծել միայն մեկ անգամ:',
  'You are not authorized to perform this action.' => 'Դուք չունեք համապատասխան իրավունքներ տրված գործողությունը կատարելու համար:',
  'Your request is not valid.' => 'Ձեր հարցման մեջ հայտնաբերվել է սխալ:',
  '{attribute} "{value}" has already been taken.' => '{attribute} "{value}" տվյալը արդեն զբաղված է:',
  '{attribute} cannot be blank.' => '{attribute} դաշտը չպետք է լինի դատարկ:',
  '{attribute} is invalid.' => '{attribute} տվյալը անիրական է:',
  '{attribute} is not a valid URL.' => '{attribute} տվյալը չի հանդիսանում իրական URL:',
  '{attribute} is not a valid email address.' => '{attribute} չի հանդիսանում իրական E-Mail հասցե:',
  '{attribute} is not in the list.' => '{attribute} տվյալը բացակայում է ցուցակում:',
  '{attribute} is of the wrong length (should be {length} characters).' => '{attribut} ատրիբուտի երկարությունը սխալ է (պետք է լինի {length} տառատեսակ):',
  '{attribute} is too big (maximum is {max}).' => '{attribute} տվյալը չափազանց մեծ է (Մակսիմալը` {max}):',
  '{attribute} is too long (maximum is {max} characters).' => '{attribute} տվյալը չափազանց երկար է (Մակսիմալը` {max} տառատեսակ):',
  '{attribute} is too short (minimum is {min} characters).' => '{attribute} տվյալը չափազանց կարճ է (Մինիմալը` {min} տառատեսակ):',
  '{attribute} is too small (minimum is {min}).' => '{attribute} տվյալը չափազանց փոքր է (Մինիմալը` {min}):',
  '{attribute} must be a number.' => '{attribute} տվյալը պետք է լինի թիվ:',
  '{attribute} must be an integer.' => '{attribute} տվյալը պետք է լինի ամբողջ թիվ:',
  '{attribute} must be repeated exactly.' => '{attribute} դաշտը պետք է կրկնել նույնությամբ:',
  '{attribute} must be {type}.' => '{attribute} տվյալը պետք է լինի {type}:',
  '{className} does not support add() functionality.' => '{className} կլասը չի ապահովում add() ֆունկցիոնալ:',
  '{className} does not support delete() functionality.' => '{className} կլասը չի ապահովում delete() ֆունկցիոնալ:',
  '{className} does not support flush() functionality.' => '{className} կլասը չի ապահովում flush() ֆունկցիոնալ:',
  '{className} does not support get() functionality.' => '{className} կլասը չի ապահովում get() ֆունկցիոնալ:',
  '{className} does not support set() functionality.' => '{className} կլասը չի ապահովում set() ֆունկցիոնալ:',
  '{class} does not have attribute "{name}".' => '{class} կլասը չունի "{name}" ատրիբուտ:',
  '{class} has an invalid validation rule. The rule must specify attributes to be validated and the validator name.' => 'Класс {class} содержит неверное правило проверки (validation rule). Правило должно иметь имя и включать элементы для проверки.',
  '{class} must specify "model" and "attribute" or "name" property values.' => 'В классе {class} должны быть определены значения свойств "model" и "attribute", либо "name".',
  '{class}.allowAutoLogin must be set true in order to use cookie-based authentication.' => 'Для использования авторизации, построенной на cookie, свойство {class}.allowAutoLogin должно принять значение "true".',
  '{class}::authenticate() must be implemented.' => 'Требуется определить метод {class}::authenticate().',
  '{controller} cannot find the requested view "{view}".' => 'Контроллер {controller} не может найти представление (view) "{view}".',
  '{controller} contains improperly nested widget tags in its view "{view}". A {widget} widget does not have an endWidget() call.' => 'Контроллер {controller} содержит в своем представлении (view) "{view}" тэги виджетов с неправильной вложенностью. В виджете (widget) {widget} не используется вызов endWidget().',
  '{controller} has an extra endWidget({id}) call in its view.' => 'В представлении (view) контроллера {controller} обнаружен лишний вызов endWidget({id}).',
  '{widget} cannot find the view "{view}".' => '{widget} վիդժետը չի կարողանում գտնել "{view}" պատկերումը (view)',

);




$coreMessageFile = Yii::getFrameworkPath().DIRECTORY_SEPARATOR.'messages'.DIRECTORY_SEPARATOR.basename(dirname(__FILE__),'php').DIRECTORY_SEPARATOR.'yii.php';
if(is_file($coreMessageFile)){
	return CMap::mergeArray( require($coreMessageFile), $myown );
}else{
	return $myown;
}