<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-08-11 00:35:13 --> Form Validation Class Initialized
INFO - 2018-08-11 00:35:13 --> Model Class Initialized
INFO - 2018-08-11 00:35:16 --> Form Validation Class Initialized
INFO - 2018-08-11 00:35:16 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 00:35:16 --> Model Class Initialized
DEBUG - 2018-08-11 00:35:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 00:35:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/auth/views/login.php
DEBUG - 2018-08-11 00:35:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 00:35:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 00:35:16 --> Final output sent to browser
DEBUG - 2018-08-11 00:35:16 --> Total execution time: 0.1904
INFO - 2018-08-11 00:36:03 --> Model Class Initialized
INFO - 2018-08-11 00:36:03 --> Form Validation Class Initialized
DEBUG - 2018-08-11 00:36:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 00:36:03 --> Model Class Initialized
DEBUG - 2018-08-11 00:36:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 00:36:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/sections/search_section_home.php
DEBUG - 2018-08-11 00:36:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/lesson_count.php
DEBUG - 2018-08-11 00:36:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/index.php
DEBUG - 2018-08-11 00:36:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 00:36:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 00:36:03 --> Final output sent to browser
DEBUG - 2018-08-11 00:36:03 --> Total execution time: 0.5866
INFO - 2018-08-11 00:39:06 --> Model Class Initialized
INFO - 2018-08-11 00:39:06 --> Form Validation Class Initialized
DEBUG - 2018-08-11 00:39:06 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 00:39:06 --> Model Class Initialized
ERROR - 2018-08-11 00:39:06 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 00:39:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 00:39:06 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 00:39:17 --> Model Class Initialized
INFO - 2018-08-11 00:39:17 --> Form Validation Class Initialized
DEBUG - 2018-08-11 00:39:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 00:39:17 --> Model Class Initialized
DEBUG - 2018-08-11 00:39:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 00:39:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/sections/search_section_home.php
DEBUG - 2018-08-11 00:39:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/lesson_count.php
DEBUG - 2018-08-11 00:39:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/index.php
DEBUG - 2018-08-11 00:39:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 00:39:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 00:39:18 --> Final output sent to browser
DEBUG - 2018-08-11 00:39:18 --> Total execution time: 0.4132
INFO - 2018-08-11 00:40:15 --> Form Validation Class Initialized
INFO - 2018-08-11 00:40:15 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 00:40:15 --> Model Class Initialized
DEBUG - 2018-08-11 00:40:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 00:40:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/auth/views/login.php
DEBUG - 2018-08-11 00:40:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 00:40:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 00:40:16 --> Final output sent to browser
DEBUG - 2018-08-11 00:40:16 --> Total execution time: 0.2414
INFO - 2018-08-11 00:40:29 --> Form Validation Class Initialized
INFO - 2018-08-11 00:40:29 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 00:40:29 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2018-08-11 05:44:40 --> Config Class Initialized
INFO - 2018-08-11 05:44:40 --> Hooks Class Initialized
DEBUG - 2018-08-11 05:44:40 --> UTF-8 Support Enabled
INFO - 2018-08-11 05:44:40 --> Utf8 Class Initialized
INFO - 2018-08-11 05:44:40 --> URI Class Initialized
DEBUG - 2018-08-11 05:44:40 --> No URI present. Default controller set.
INFO - 2018-08-11 05:44:40 --> Router Class Initialized
INFO - 2018-08-11 05:44:40 --> Output Class Initialized
INFO - 2018-08-11 05:44:40 --> Security Class Initialized
DEBUG - 2018-08-11 05:44:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 05:44:41 --> Input Class Initialized
INFO - 2018-08-11 05:44:41 --> Language Class Initialized
INFO - 2018-08-11 05:44:41 --> Language Class Initialized
INFO - 2018-08-11 05:44:41 --> Config Class Initialized
INFO - 2018-08-11 05:44:41 --> Loader Class Initialized
INFO - 2018-08-11 05:44:41 --> Helper loaded: security_helper
INFO - 2018-08-11 05:44:41 --> Helper loaded: form_helper
INFO - 2018-08-11 05:44:41 --> Helper loaded: url_helper
INFO - 2018-08-11 05:44:41 --> Helper loaded: global_helper
INFO - 2018-08-11 05:44:41 --> Helper loaded: inflector_helper
INFO - 2018-08-11 05:44:41 --> Helper loaded: text_helper
INFO - 2018-08-11 05:44:41 --> Database Driver Class Initialized
INFO - 2018-08-11 05:44:41 --> Model Class Initialized
INFO - 2018-08-11 05:44:41 --> Controller Class Initialized
DEBUG - 2018-08-11 05:44:41 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 05:44:41 --> Email Class Initialized
INFO - 2018-08-11 05:44:41 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 05:44:41 --> Helper loaded: cookie_helper
INFO - 2018-08-11 05:44:41 --> Helper loaded: language_helper
INFO - 2018-08-11 05:44:41 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 05:44:41 --> Model Class Initialized
INFO - 2018-08-11 05:44:41 --> Helper loaded: date_helper
INFO - 2018-08-11 10:44:41 --> Model Class Initialized
INFO - 2018-08-11 10:44:41 --> Form Validation Class Initialized
DEBUG - 2018-08-11 10:44:41 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 10:44:41 --> Model Class Initialized
DEBUG - 2018-08-11 10:44:41 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 10:44:41 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/sections/search_section_home.php
DEBUG - 2018-08-11 10:44:41 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/lesson_count.php
DEBUG - 2018-08-11 10:44:41 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/index.php
DEBUG - 2018-08-11 10:44:41 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 10:44:41 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 10:44:41 --> Final output sent to browser
DEBUG - 2018-08-11 10:44:41 --> Total execution time: 0.6267
INFO - 2018-08-11 05:44:45 --> Config Class Initialized
INFO - 2018-08-11 05:44:45 --> Hooks Class Initialized
DEBUG - 2018-08-11 05:44:45 --> UTF-8 Support Enabled
INFO - 2018-08-11 05:44:45 --> Utf8 Class Initialized
INFO - 2018-08-11 05:44:45 --> URI Class Initialized
INFO - 2018-08-11 05:44:45 --> Router Class Initialized
INFO - 2018-08-11 05:44:45 --> Output Class Initialized
INFO - 2018-08-11 05:44:45 --> Security Class Initialized
DEBUG - 2018-08-11 05:44:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 05:44:45 --> Input Class Initialized
INFO - 2018-08-11 05:44:45 --> Language Class Initialized
ERROR - 2018-08-11 05:44:45 --> 404 Page Not Found: /index
INFO - 2018-08-11 05:48:52 --> Config Class Initialized
INFO - 2018-08-11 05:48:52 --> Hooks Class Initialized
DEBUG - 2018-08-11 05:48:52 --> UTF-8 Support Enabled
INFO - 2018-08-11 05:48:52 --> Utf8 Class Initialized
INFO - 2018-08-11 05:48:52 --> URI Class Initialized
INFO - 2018-08-11 05:48:52 --> Router Class Initialized
INFO - 2018-08-11 05:48:52 --> Output Class Initialized
INFO - 2018-08-11 05:48:52 --> Security Class Initialized
DEBUG - 2018-08-11 05:48:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 05:48:52 --> Input Class Initialized
INFO - 2018-08-11 05:48:52 --> Language Class Initialized
INFO - 2018-08-11 05:48:52 --> Language Class Initialized
INFO - 2018-08-11 05:48:52 --> Config Class Initialized
INFO - 2018-08-11 05:48:52 --> Loader Class Initialized
INFO - 2018-08-11 05:48:52 --> Helper loaded: security_helper
INFO - 2018-08-11 05:48:52 --> Helper loaded: form_helper
INFO - 2018-08-11 05:48:52 --> Helper loaded: url_helper
INFO - 2018-08-11 05:48:52 --> Helper loaded: global_helper
INFO - 2018-08-11 05:48:52 --> Helper loaded: inflector_helper
INFO - 2018-08-11 05:48:52 --> Helper loaded: text_helper
INFO - 2018-08-11 05:48:52 --> Database Driver Class Initialized
INFO - 2018-08-11 05:48:52 --> Model Class Initialized
INFO - 2018-08-11 05:48:52 --> Controller Class Initialized
DEBUG - 2018-08-11 05:48:52 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 05:48:52 --> Email Class Initialized
INFO - 2018-08-11 05:48:52 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 05:48:52 --> Helper loaded: cookie_helper
INFO - 2018-08-11 05:48:52 --> Helper loaded: language_helper
INFO - 2018-08-11 05:48:52 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 05:48:52 --> Model Class Initialized
INFO - 2018-08-11 05:48:52 --> Helper loaded: date_helper
INFO - 2018-08-11 10:48:52 --> Form Validation Class Initialized
INFO - 2018-08-11 10:48:52 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 10:48:52 --> Model Class Initialized
DEBUG - 2018-08-11 10:48:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 10:48:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/auth/views/login.php
DEBUG - 2018-08-11 10:48:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 10:48:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 10:48:52 --> Final output sent to browser
DEBUG - 2018-08-11 10:48:52 --> Total execution time: 0.1968
INFO - 2018-08-11 05:49:04 --> Config Class Initialized
INFO - 2018-08-11 05:49:04 --> Hooks Class Initialized
DEBUG - 2018-08-11 05:49:04 --> UTF-8 Support Enabled
INFO - 2018-08-11 05:49:04 --> Utf8 Class Initialized
INFO - 2018-08-11 05:49:04 --> URI Class Initialized
INFO - 2018-08-11 05:49:04 --> Router Class Initialized
INFO - 2018-08-11 05:49:04 --> Output Class Initialized
INFO - 2018-08-11 05:49:04 --> Security Class Initialized
DEBUG - 2018-08-11 05:49:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 05:49:04 --> Input Class Initialized
INFO - 2018-08-11 05:49:04 --> Language Class Initialized
INFO - 2018-08-11 05:49:04 --> Language Class Initialized
INFO - 2018-08-11 05:49:04 --> Config Class Initialized
INFO - 2018-08-11 05:49:04 --> Loader Class Initialized
INFO - 2018-08-11 05:49:04 --> Helper loaded: security_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: form_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: url_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: global_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: inflector_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: text_helper
INFO - 2018-08-11 05:49:04 --> Database Driver Class Initialized
INFO - 2018-08-11 05:49:04 --> Model Class Initialized
INFO - 2018-08-11 05:49:04 --> Controller Class Initialized
DEBUG - 2018-08-11 05:49:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 05:49:04 --> Email Class Initialized
INFO - 2018-08-11 05:49:04 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 05:49:04 --> Helper loaded: cookie_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: language_helper
INFO - 2018-08-11 05:49:04 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 05:49:04 --> Model Class Initialized
INFO - 2018-08-11 05:49:04 --> Helper loaded: date_helper
INFO - 2018-08-11 10:49:04 --> Form Validation Class Initialized
INFO - 2018-08-11 10:49:04 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 10:49:04 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2018-08-11 05:49:04 --> Config Class Initialized
INFO - 2018-08-11 05:49:04 --> Hooks Class Initialized
DEBUG - 2018-08-11 05:49:04 --> UTF-8 Support Enabled
INFO - 2018-08-11 05:49:04 --> Utf8 Class Initialized
INFO - 2018-08-11 05:49:04 --> URI Class Initialized
INFO - 2018-08-11 05:49:04 --> Router Class Initialized
INFO - 2018-08-11 05:49:04 --> Output Class Initialized
INFO - 2018-08-11 05:49:04 --> Security Class Initialized
DEBUG - 2018-08-11 05:49:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 05:49:04 --> Input Class Initialized
INFO - 2018-08-11 05:49:04 --> Language Class Initialized
INFO - 2018-08-11 05:49:04 --> Language Class Initialized
INFO - 2018-08-11 05:49:04 --> Config Class Initialized
INFO - 2018-08-11 05:49:04 --> Loader Class Initialized
INFO - 2018-08-11 05:49:04 --> Helper loaded: security_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: form_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: url_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: global_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: inflector_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: text_helper
INFO - 2018-08-11 05:49:04 --> Database Driver Class Initialized
INFO - 2018-08-11 05:49:04 --> Model Class Initialized
INFO - 2018-08-11 05:49:04 --> Controller Class Initialized
DEBUG - 2018-08-11 05:49:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 05:49:04 --> Email Class Initialized
INFO - 2018-08-11 05:49:04 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 05:49:04 --> Helper loaded: cookie_helper
INFO - 2018-08-11 05:49:04 --> Helper loaded: language_helper
INFO - 2018-08-11 05:49:04 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 05:49:04 --> Model Class Initialized
INFO - 2018-08-11 05:49:04 --> Helper loaded: date_helper
INFO - 2018-08-11 10:49:04 --> Form Validation Class Initialized
INFO - 2018-08-11 10:49:04 --> Model Class Initialized
DEBUG - 2018-08-11 10:49:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 10:49:04 --> Model Class Initialized
DEBUG - 2018-08-11 10:49:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 10:49:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 10:49:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 10:49:04 --> Model Class Initialized
DEBUG - 2018-08-11 10:49:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 10:49:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 10:49:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 10:49:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 10:49:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 10:49:04 --> Final output sent to browser
DEBUG - 2018-08-11 10:49:04 --> Total execution time: 0.2329
INFO - 2018-08-11 05:49:22 --> Config Class Initialized
INFO - 2018-08-11 05:49:22 --> Hooks Class Initialized
DEBUG - 2018-08-11 05:49:22 --> UTF-8 Support Enabled
INFO - 2018-08-11 05:49:22 --> Utf8 Class Initialized
INFO - 2018-08-11 05:49:22 --> URI Class Initialized
INFO - 2018-08-11 05:49:22 --> Router Class Initialized
INFO - 2018-08-11 05:49:22 --> Output Class Initialized
INFO - 2018-08-11 05:49:22 --> Security Class Initialized
DEBUG - 2018-08-11 05:49:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 05:49:22 --> Input Class Initialized
INFO - 2018-08-11 05:49:22 --> Language Class Initialized
INFO - 2018-08-11 05:49:22 --> Language Class Initialized
INFO - 2018-08-11 05:49:22 --> Config Class Initialized
INFO - 2018-08-11 05:49:22 --> Loader Class Initialized
INFO - 2018-08-11 05:49:22 --> Helper loaded: security_helper
INFO - 2018-08-11 05:49:22 --> Helper loaded: form_helper
INFO - 2018-08-11 05:49:22 --> Helper loaded: url_helper
INFO - 2018-08-11 05:49:22 --> Helper loaded: global_helper
INFO - 2018-08-11 05:49:22 --> Helper loaded: inflector_helper
INFO - 2018-08-11 05:49:22 --> Helper loaded: text_helper
INFO - 2018-08-11 05:49:22 --> Database Driver Class Initialized
INFO - 2018-08-11 05:49:22 --> Model Class Initialized
INFO - 2018-08-11 05:49:22 --> Controller Class Initialized
DEBUG - 2018-08-11 05:49:22 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 05:49:22 --> Email Class Initialized
INFO - 2018-08-11 05:49:22 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 05:49:22 --> Helper loaded: cookie_helper
INFO - 2018-08-11 05:49:22 --> Helper loaded: language_helper
INFO - 2018-08-11 05:49:22 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 05:49:22 --> Model Class Initialized
INFO - 2018-08-11 05:49:22 --> Helper loaded: date_helper
INFO - 2018-08-11 10:49:22 --> Form Validation Class Initialized
INFO - 2018-08-11 10:49:22 --> Model Class Initialized
DEBUG - 2018-08-11 10:49:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 10:49:22 --> Model Class Initialized
DEBUG - 2018-08-11 10:49:22 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 10:49:22 --> Model Class Initialized
INFO - 2018-08-11 10:49:22 --> Model Class Initialized
DEBUG - 2018-08-11 10:49:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 10:49:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 10:49:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 10:49:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 10:49:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 10:49:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 10:49:22 --> Final output sent to browser
DEBUG - 2018-08-11 10:49:22 --> Total execution time: 0.1584
INFO - 2018-08-11 05:58:59 --> Config Class Initialized
INFO - 2018-08-11 05:58:59 --> Hooks Class Initialized
DEBUG - 2018-08-11 05:58:59 --> UTF-8 Support Enabled
INFO - 2018-08-11 05:58:59 --> Utf8 Class Initialized
INFO - 2018-08-11 05:58:59 --> URI Class Initialized
INFO - 2018-08-11 05:58:59 --> Router Class Initialized
INFO - 2018-08-11 05:58:59 --> Output Class Initialized
INFO - 2018-08-11 05:58:59 --> Security Class Initialized
DEBUG - 2018-08-11 05:58:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 05:58:59 --> Input Class Initialized
INFO - 2018-08-11 05:58:59 --> Language Class Initialized
INFO - 2018-08-11 05:58:59 --> Language Class Initialized
INFO - 2018-08-11 05:58:59 --> Config Class Initialized
INFO - 2018-08-11 05:58:59 --> Loader Class Initialized
INFO - 2018-08-11 05:58:59 --> Helper loaded: security_helper
INFO - 2018-08-11 05:58:59 --> Helper loaded: form_helper
INFO - 2018-08-11 05:58:59 --> Helper loaded: url_helper
INFO - 2018-08-11 05:58:59 --> Helper loaded: global_helper
INFO - 2018-08-11 05:58:59 --> Helper loaded: inflector_helper
INFO - 2018-08-11 05:58:59 --> Helper loaded: text_helper
INFO - 2018-08-11 05:58:59 --> Database Driver Class Initialized
INFO - 2018-08-11 05:58:59 --> Model Class Initialized
INFO - 2018-08-11 05:58:59 --> Controller Class Initialized
DEBUG - 2018-08-11 05:58:59 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 05:58:59 --> Email Class Initialized
INFO - 2018-08-11 05:58:59 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 05:58:59 --> Helper loaded: cookie_helper
INFO - 2018-08-11 05:58:59 --> Helper loaded: language_helper
INFO - 2018-08-11 05:58:59 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 05:58:59 --> Model Class Initialized
INFO - 2018-08-11 05:58:59 --> Helper loaded: date_helper
INFO - 2018-08-11 10:58:59 --> Form Validation Class Initialized
INFO - 2018-08-11 10:58:59 --> Model Class Initialized
DEBUG - 2018-08-11 10:58:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 10:58:59 --> Model Class Initialized
DEBUG - 2018-08-11 10:58:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 10:58:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 10:58:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 10:58:59 --> Model Class Initialized
DEBUG - 2018-08-11 10:58:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 10:58:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 10:58:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 10:58:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 10:58:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 10:58:59 --> Final output sent to browser
DEBUG - 2018-08-11 10:58:59 --> Total execution time: 0.2238
INFO - 2018-08-11 06:02:43 --> Config Class Initialized
INFO - 2018-08-11 06:02:43 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:02:43 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:02:43 --> Utf8 Class Initialized
INFO - 2018-08-11 06:02:43 --> URI Class Initialized
INFO - 2018-08-11 06:02:43 --> Router Class Initialized
INFO - 2018-08-11 06:02:43 --> Output Class Initialized
INFO - 2018-08-11 06:02:43 --> Security Class Initialized
DEBUG - 2018-08-11 06:02:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:02:43 --> Input Class Initialized
INFO - 2018-08-11 06:02:43 --> Language Class Initialized
INFO - 2018-08-11 06:02:43 --> Language Class Initialized
INFO - 2018-08-11 06:02:43 --> Config Class Initialized
INFO - 2018-08-11 06:02:43 --> Loader Class Initialized
INFO - 2018-08-11 06:02:43 --> Helper loaded: security_helper
INFO - 2018-08-11 06:02:43 --> Helper loaded: form_helper
INFO - 2018-08-11 06:02:43 --> Helper loaded: url_helper
INFO - 2018-08-11 06:02:43 --> Helper loaded: global_helper
INFO - 2018-08-11 06:02:43 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:02:43 --> Helper loaded: text_helper
INFO - 2018-08-11 06:02:43 --> Database Driver Class Initialized
INFO - 2018-08-11 06:02:43 --> Model Class Initialized
INFO - 2018-08-11 06:02:43 --> Controller Class Initialized
DEBUG - 2018-08-11 06:02:43 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:02:43 --> Email Class Initialized
INFO - 2018-08-11 06:02:43 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:02:43 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:02:43 --> Helper loaded: language_helper
INFO - 2018-08-11 06:02:43 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:02:43 --> Model Class Initialized
INFO - 2018-08-11 06:02:43 --> Helper loaded: date_helper
INFO - 2018-08-11 11:02:43 --> Model Class Initialized
INFO - 2018-08-11 11:02:43 --> Form Validation Class Initialized
DEBUG - 2018-08-11 11:02:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:02:43 --> Model Class Initialized
ERROR - 2018-08-11 11:02:43 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 11:02:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 11:02:43 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 06:03:49 --> Config Class Initialized
INFO - 2018-08-11 06:03:49 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:03:49 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:03:49 --> Utf8 Class Initialized
INFO - 2018-08-11 06:03:49 --> URI Class Initialized
INFO - 2018-08-11 06:03:49 --> Router Class Initialized
INFO - 2018-08-11 06:03:49 --> Output Class Initialized
INFO - 2018-08-11 06:03:49 --> Security Class Initialized
DEBUG - 2018-08-11 06:03:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:03:49 --> Input Class Initialized
INFO - 2018-08-11 06:03:49 --> Language Class Initialized
INFO - 2018-08-11 06:03:49 --> Language Class Initialized
INFO - 2018-08-11 06:03:49 --> Config Class Initialized
INFO - 2018-08-11 06:03:49 --> Loader Class Initialized
INFO - 2018-08-11 06:03:49 --> Helper loaded: security_helper
INFO - 2018-08-11 06:03:49 --> Helper loaded: form_helper
INFO - 2018-08-11 06:03:49 --> Helper loaded: url_helper
INFO - 2018-08-11 06:03:49 --> Helper loaded: global_helper
INFO - 2018-08-11 06:03:49 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:03:49 --> Helper loaded: text_helper
INFO - 2018-08-11 06:03:49 --> Database Driver Class Initialized
INFO - 2018-08-11 06:03:49 --> Model Class Initialized
INFO - 2018-08-11 06:03:49 --> Controller Class Initialized
DEBUG - 2018-08-11 06:03:49 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:03:49 --> Email Class Initialized
INFO - 2018-08-11 06:03:49 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:03:49 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:03:49 --> Helper loaded: language_helper
INFO - 2018-08-11 06:03:49 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:03:49 --> Model Class Initialized
INFO - 2018-08-11 06:03:49 --> Helper loaded: date_helper
INFO - 2018-08-11 11:03:49 --> Form Validation Class Initialized
INFO - 2018-08-11 11:03:49 --> Model Class Initialized
DEBUG - 2018-08-11 11:03:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:03:49 --> Model Class Initialized
DEBUG - 2018-08-11 11:03:49 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:03:49 --> Model Class Initialized
INFO - 2018-08-11 11:03:49 --> Model Class Initialized
DEBUG - 2018-08-11 11:03:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:03:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:03:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:03:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:03:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:03:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:03:50 --> Final output sent to browser
DEBUG - 2018-08-11 11:03:50 --> Total execution time: 0.2309
INFO - 2018-08-11 06:05:31 --> Config Class Initialized
INFO - 2018-08-11 06:05:31 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:05:31 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:05:31 --> Utf8 Class Initialized
INFO - 2018-08-11 06:05:31 --> URI Class Initialized
INFO - 2018-08-11 06:05:31 --> Router Class Initialized
INFO - 2018-08-11 06:05:31 --> Output Class Initialized
INFO - 2018-08-11 06:05:31 --> Security Class Initialized
DEBUG - 2018-08-11 06:05:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:05:31 --> Input Class Initialized
INFO - 2018-08-11 06:05:31 --> Language Class Initialized
INFO - 2018-08-11 06:05:31 --> Language Class Initialized
INFO - 2018-08-11 06:05:31 --> Config Class Initialized
INFO - 2018-08-11 06:05:31 --> Loader Class Initialized
INFO - 2018-08-11 06:05:31 --> Helper loaded: security_helper
INFO - 2018-08-11 06:05:31 --> Helper loaded: form_helper
INFO - 2018-08-11 06:05:31 --> Helper loaded: url_helper
INFO - 2018-08-11 06:05:31 --> Helper loaded: global_helper
INFO - 2018-08-11 06:05:31 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:05:31 --> Helper loaded: text_helper
INFO - 2018-08-11 06:05:31 --> Database Driver Class Initialized
INFO - 2018-08-11 06:05:31 --> Model Class Initialized
INFO - 2018-08-11 06:05:31 --> Controller Class Initialized
DEBUG - 2018-08-11 06:05:31 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:05:31 --> Email Class Initialized
INFO - 2018-08-11 06:05:31 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:05:31 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:05:31 --> Helper loaded: language_helper
INFO - 2018-08-11 06:05:31 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:05:31 --> Model Class Initialized
INFO - 2018-08-11 06:05:31 --> Helper loaded: date_helper
INFO - 2018-08-11 11:05:31 --> Form Validation Class Initialized
INFO - 2018-08-11 11:05:31 --> Model Class Initialized
DEBUG - 2018-08-11 11:05:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 11:05:31 --> Model Class Initialized
DEBUG - 2018-08-11 11:05:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:05:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:05:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:05:31 --> Model Class Initialized
DEBUG - 2018-08-11 11:05:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:05:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 11:05:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 11:05:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:05:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 11:05:31 --> Final output sent to browser
DEBUG - 2018-08-11 11:05:31 --> Total execution time: 0.2301
INFO - 2018-08-11 06:05:34 --> Config Class Initialized
INFO - 2018-08-11 06:05:34 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:05:34 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:05:34 --> Utf8 Class Initialized
INFO - 2018-08-11 06:05:34 --> URI Class Initialized
INFO - 2018-08-11 06:05:34 --> Router Class Initialized
INFO - 2018-08-11 06:05:34 --> Output Class Initialized
INFO - 2018-08-11 06:05:34 --> Security Class Initialized
DEBUG - 2018-08-11 06:05:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:05:34 --> Input Class Initialized
INFO - 2018-08-11 06:05:34 --> Language Class Initialized
INFO - 2018-08-11 06:05:34 --> Language Class Initialized
INFO - 2018-08-11 06:05:34 --> Config Class Initialized
INFO - 2018-08-11 06:05:34 --> Loader Class Initialized
INFO - 2018-08-11 06:05:34 --> Helper loaded: security_helper
INFO - 2018-08-11 06:05:34 --> Helper loaded: form_helper
INFO - 2018-08-11 06:05:34 --> Helper loaded: url_helper
INFO - 2018-08-11 06:05:34 --> Helper loaded: global_helper
INFO - 2018-08-11 06:05:34 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:05:34 --> Helper loaded: text_helper
INFO - 2018-08-11 06:05:34 --> Database Driver Class Initialized
INFO - 2018-08-11 06:05:34 --> Model Class Initialized
INFO - 2018-08-11 06:05:34 --> Controller Class Initialized
DEBUG - 2018-08-11 06:05:34 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:05:34 --> Email Class Initialized
INFO - 2018-08-11 06:05:34 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:05:34 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:05:34 --> Helper loaded: language_helper
INFO - 2018-08-11 06:05:34 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:05:34 --> Model Class Initialized
INFO - 2018-08-11 06:05:34 --> Helper loaded: date_helper
INFO - 2018-08-11 11:05:34 --> Form Validation Class Initialized
INFO - 2018-08-11 11:05:34 --> Model Class Initialized
DEBUG - 2018-08-11 11:05:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:05:34 --> Model Class Initialized
DEBUG - 2018-08-11 11:05:34 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:05:34 --> Model Class Initialized
INFO - 2018-08-11 11:05:34 --> Model Class Initialized
DEBUG - 2018-08-11 11:05:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:05:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:05:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:05:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:05:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:05:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:05:34 --> Final output sent to browser
DEBUG - 2018-08-11 11:05:34 --> Total execution time: 0.1882
INFO - 2018-08-11 06:07:19 --> Config Class Initialized
INFO - 2018-08-11 06:07:19 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:07:19 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:07:19 --> Utf8 Class Initialized
INFO - 2018-08-11 06:07:19 --> URI Class Initialized
INFO - 2018-08-11 06:07:19 --> Router Class Initialized
INFO - 2018-08-11 06:07:19 --> Output Class Initialized
INFO - 2018-08-11 06:07:19 --> Security Class Initialized
DEBUG - 2018-08-11 06:07:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:07:19 --> Input Class Initialized
INFO - 2018-08-11 06:07:19 --> Language Class Initialized
INFO - 2018-08-11 06:07:19 --> Language Class Initialized
INFO - 2018-08-11 06:07:19 --> Config Class Initialized
INFO - 2018-08-11 06:07:19 --> Loader Class Initialized
INFO - 2018-08-11 06:07:19 --> Helper loaded: security_helper
INFO - 2018-08-11 06:07:19 --> Helper loaded: form_helper
INFO - 2018-08-11 06:07:19 --> Helper loaded: url_helper
INFO - 2018-08-11 06:07:19 --> Helper loaded: global_helper
INFO - 2018-08-11 06:07:19 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:07:19 --> Helper loaded: text_helper
INFO - 2018-08-11 06:07:19 --> Database Driver Class Initialized
INFO - 2018-08-11 06:07:19 --> Model Class Initialized
INFO - 2018-08-11 06:07:19 --> Controller Class Initialized
DEBUG - 2018-08-11 06:07:19 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:07:19 --> Email Class Initialized
INFO - 2018-08-11 06:07:19 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:07:19 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:07:19 --> Helper loaded: language_helper
INFO - 2018-08-11 06:07:19 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:07:19 --> Model Class Initialized
INFO - 2018-08-11 06:07:19 --> Helper loaded: date_helper
INFO - 2018-08-11 11:07:19 --> Form Validation Class Initialized
INFO - 2018-08-11 11:07:19 --> Model Class Initialized
DEBUG - 2018-08-11 11:07:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:07:19 --> Model Class Initialized
DEBUG - 2018-08-11 11:07:19 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:07:19 --> Model Class Initialized
INFO - 2018-08-11 11:07:19 --> Model Class Initialized
DEBUG - 2018-08-11 11:07:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:07:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:07:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:07:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:07:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:07:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:07:20 --> Final output sent to browser
DEBUG - 2018-08-11 11:07:20 --> Total execution time: 0.2909
INFO - 2018-08-11 06:07:39 --> Config Class Initialized
INFO - 2018-08-11 06:07:39 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:07:39 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:07:39 --> Utf8 Class Initialized
INFO - 2018-08-11 06:07:39 --> URI Class Initialized
INFO - 2018-08-11 06:07:39 --> Router Class Initialized
INFO - 2018-08-11 06:07:39 --> Output Class Initialized
INFO - 2018-08-11 06:07:39 --> Security Class Initialized
DEBUG - 2018-08-11 06:07:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:07:39 --> Input Class Initialized
INFO - 2018-08-11 06:07:39 --> Language Class Initialized
INFO - 2018-08-11 06:07:39 --> Language Class Initialized
INFO - 2018-08-11 06:07:39 --> Config Class Initialized
INFO - 2018-08-11 06:07:39 --> Loader Class Initialized
INFO - 2018-08-11 06:07:39 --> Helper loaded: security_helper
INFO - 2018-08-11 06:07:39 --> Helper loaded: form_helper
INFO - 2018-08-11 06:07:39 --> Helper loaded: url_helper
INFO - 2018-08-11 06:07:39 --> Helper loaded: global_helper
INFO - 2018-08-11 06:07:39 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:07:39 --> Helper loaded: text_helper
INFO - 2018-08-11 06:07:39 --> Database Driver Class Initialized
INFO - 2018-08-11 06:07:39 --> Model Class Initialized
INFO - 2018-08-11 06:07:39 --> Controller Class Initialized
DEBUG - 2018-08-11 06:07:39 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:07:39 --> Email Class Initialized
INFO - 2018-08-11 06:07:39 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:07:39 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:07:39 --> Helper loaded: language_helper
INFO - 2018-08-11 06:07:39 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:07:39 --> Model Class Initialized
INFO - 2018-08-11 06:07:39 --> Helper loaded: date_helper
INFO - 2018-08-11 11:07:39 --> Form Validation Class Initialized
INFO - 2018-08-11 11:07:39 --> Model Class Initialized
DEBUG - 2018-08-11 11:07:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 11:07:39 --> Model Class Initialized
DEBUG - 2018-08-11 11:07:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:07:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:07:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:07:39 --> Model Class Initialized
DEBUG - 2018-08-11 11:07:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:07:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 11:07:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 11:07:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:07:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 11:07:39 --> Final output sent to browser
DEBUG - 2018-08-11 11:07:39 --> Total execution time: 0.1298
INFO - 2018-08-11 06:09:03 --> Config Class Initialized
INFO - 2018-08-11 06:09:03 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:09:03 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:09:03 --> Utf8 Class Initialized
INFO - 2018-08-11 06:09:03 --> URI Class Initialized
INFO - 2018-08-11 06:09:03 --> Router Class Initialized
INFO - 2018-08-11 06:09:03 --> Output Class Initialized
INFO - 2018-08-11 06:09:03 --> Security Class Initialized
DEBUG - 2018-08-11 06:09:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:09:03 --> Input Class Initialized
INFO - 2018-08-11 06:09:03 --> Language Class Initialized
INFO - 2018-08-11 06:09:03 --> Language Class Initialized
INFO - 2018-08-11 06:09:03 --> Config Class Initialized
INFO - 2018-08-11 06:09:03 --> Loader Class Initialized
INFO - 2018-08-11 06:09:03 --> Helper loaded: security_helper
INFO - 2018-08-11 06:09:03 --> Helper loaded: form_helper
INFO - 2018-08-11 06:09:03 --> Helper loaded: url_helper
INFO - 2018-08-11 06:09:03 --> Helper loaded: global_helper
INFO - 2018-08-11 06:09:03 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:09:03 --> Helper loaded: text_helper
INFO - 2018-08-11 06:09:03 --> Database Driver Class Initialized
INFO - 2018-08-11 06:09:03 --> Model Class Initialized
INFO - 2018-08-11 06:09:03 --> Controller Class Initialized
DEBUG - 2018-08-11 06:09:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:09:03 --> Email Class Initialized
INFO - 2018-08-11 06:09:03 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:09:03 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:09:03 --> Helper loaded: language_helper
INFO - 2018-08-11 06:09:03 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:09:03 --> Model Class Initialized
INFO - 2018-08-11 06:09:03 --> Helper loaded: date_helper
INFO - 2018-08-11 11:09:03 --> Form Validation Class Initialized
INFO - 2018-08-11 11:09:03 --> Model Class Initialized
DEBUG - 2018-08-11 11:09:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:09:03 --> Model Class Initialized
DEBUG - 2018-08-11 11:09:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:09:03 --> Model Class Initialized
INFO - 2018-08-11 11:09:03 --> Model Class Initialized
DEBUG - 2018-08-11 11:09:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:09:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:09:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:09:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:09:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:09:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:09:03 --> Final output sent to browser
DEBUG - 2018-08-11 11:09:03 --> Total execution time: 0.2055
INFO - 2018-08-11 06:09:50 --> Config Class Initialized
INFO - 2018-08-11 06:09:50 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:09:50 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:09:50 --> Utf8 Class Initialized
INFO - 2018-08-11 06:09:50 --> URI Class Initialized
INFO - 2018-08-11 06:09:50 --> Router Class Initialized
INFO - 2018-08-11 06:09:50 --> Output Class Initialized
INFO - 2018-08-11 06:09:50 --> Security Class Initialized
DEBUG - 2018-08-11 06:09:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:09:50 --> Input Class Initialized
INFO - 2018-08-11 06:09:50 --> Language Class Initialized
INFO - 2018-08-11 06:09:50 --> Language Class Initialized
INFO - 2018-08-11 06:09:50 --> Config Class Initialized
INFO - 2018-08-11 06:09:50 --> Loader Class Initialized
INFO - 2018-08-11 06:09:50 --> Helper loaded: security_helper
INFO - 2018-08-11 06:09:50 --> Helper loaded: form_helper
INFO - 2018-08-11 06:09:50 --> Helper loaded: url_helper
INFO - 2018-08-11 06:09:50 --> Helper loaded: global_helper
INFO - 2018-08-11 06:09:50 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:09:50 --> Helper loaded: text_helper
INFO - 2018-08-11 06:09:50 --> Database Driver Class Initialized
INFO - 2018-08-11 06:09:50 --> Model Class Initialized
INFO - 2018-08-11 06:09:50 --> Controller Class Initialized
DEBUG - 2018-08-11 06:09:50 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:09:50 --> Email Class Initialized
INFO - 2018-08-11 06:09:50 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:09:50 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:09:50 --> Helper loaded: language_helper
INFO - 2018-08-11 06:09:50 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:09:50 --> Model Class Initialized
INFO - 2018-08-11 06:09:50 --> Helper loaded: date_helper
INFO - 2018-08-11 11:09:50 --> Form Validation Class Initialized
INFO - 2018-08-11 11:09:50 --> Model Class Initialized
DEBUG - 2018-08-11 11:09:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:09:50 --> Model Class Initialized
DEBUG - 2018-08-11 11:09:50 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:09:50 --> Model Class Initialized
INFO - 2018-08-11 11:09:50 --> Model Class Initialized
DEBUG - 2018-08-11 11:09:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:09:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:09:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:09:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:09:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:09:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:09:51 --> Final output sent to browser
DEBUG - 2018-08-11 11:09:51 --> Total execution time: 0.1977
INFO - 2018-08-11 06:09:54 --> Config Class Initialized
INFO - 2018-08-11 06:09:54 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:09:54 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:09:54 --> Utf8 Class Initialized
INFO - 2018-08-11 06:09:54 --> URI Class Initialized
INFO - 2018-08-11 06:09:54 --> Router Class Initialized
INFO - 2018-08-11 06:09:54 --> Output Class Initialized
INFO - 2018-08-11 06:09:54 --> Security Class Initialized
DEBUG - 2018-08-11 06:09:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:09:54 --> Input Class Initialized
INFO - 2018-08-11 06:09:54 --> Language Class Initialized
INFO - 2018-08-11 06:09:54 --> Language Class Initialized
INFO - 2018-08-11 06:09:54 --> Config Class Initialized
INFO - 2018-08-11 06:09:54 --> Loader Class Initialized
INFO - 2018-08-11 06:09:54 --> Helper loaded: security_helper
INFO - 2018-08-11 06:09:54 --> Helper loaded: form_helper
INFO - 2018-08-11 06:09:54 --> Helper loaded: url_helper
INFO - 2018-08-11 06:09:54 --> Helper loaded: global_helper
INFO - 2018-08-11 06:09:54 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:09:54 --> Helper loaded: text_helper
INFO - 2018-08-11 06:09:54 --> Database Driver Class Initialized
INFO - 2018-08-11 06:09:54 --> Model Class Initialized
INFO - 2018-08-11 06:09:54 --> Controller Class Initialized
DEBUG - 2018-08-11 06:09:54 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:09:54 --> Email Class Initialized
INFO - 2018-08-11 06:09:54 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:09:54 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:09:54 --> Helper loaded: language_helper
INFO - 2018-08-11 06:09:54 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:09:54 --> Model Class Initialized
INFO - 2018-08-11 06:09:54 --> Helper loaded: date_helper
INFO - 2018-08-11 11:09:54 --> Form Validation Class Initialized
INFO - 2018-08-11 11:09:54 --> Model Class Initialized
DEBUG - 2018-08-11 11:09:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:09:54 --> Model Class Initialized
DEBUG - 2018-08-11 11:09:54 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:09:54 --> Model Class Initialized
INFO - 2018-08-11 11:09:54 --> Model Class Initialized
DEBUG - 2018-08-11 11:09:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:09:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:09:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:09:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:09:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:09:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:09:54 --> Final output sent to browser
DEBUG - 2018-08-11 11:09:54 --> Total execution time: 0.1775
INFO - 2018-08-11 06:10:57 --> Config Class Initialized
INFO - 2018-08-11 06:10:57 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:10:57 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:10:57 --> Utf8 Class Initialized
INFO - 2018-08-11 06:10:57 --> URI Class Initialized
INFO - 2018-08-11 06:10:57 --> Router Class Initialized
INFO - 2018-08-11 06:10:57 --> Output Class Initialized
INFO - 2018-08-11 06:10:57 --> Security Class Initialized
DEBUG - 2018-08-11 06:10:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:10:57 --> Input Class Initialized
INFO - 2018-08-11 06:10:57 --> Language Class Initialized
INFO - 2018-08-11 06:10:57 --> Language Class Initialized
INFO - 2018-08-11 06:10:57 --> Config Class Initialized
INFO - 2018-08-11 06:10:57 --> Loader Class Initialized
INFO - 2018-08-11 06:10:57 --> Helper loaded: security_helper
INFO - 2018-08-11 06:10:57 --> Helper loaded: form_helper
INFO - 2018-08-11 06:10:57 --> Helper loaded: url_helper
INFO - 2018-08-11 06:10:57 --> Helper loaded: global_helper
INFO - 2018-08-11 06:10:57 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:10:57 --> Helper loaded: text_helper
INFO - 2018-08-11 06:10:57 --> Database Driver Class Initialized
INFO - 2018-08-11 06:10:57 --> Model Class Initialized
INFO - 2018-08-11 06:10:57 --> Controller Class Initialized
DEBUG - 2018-08-11 06:10:57 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:10:57 --> Email Class Initialized
INFO - 2018-08-11 06:10:57 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:10:57 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:10:57 --> Helper loaded: language_helper
INFO - 2018-08-11 06:10:57 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:10:57 --> Model Class Initialized
INFO - 2018-08-11 06:10:57 --> Helper loaded: date_helper
INFO - 2018-08-11 11:10:57 --> Model Class Initialized
INFO - 2018-08-11 11:10:57 --> Form Validation Class Initialized
DEBUG - 2018-08-11 11:10:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:10:57 --> Model Class Initialized
ERROR - 2018-08-11 11:10:58 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 11:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 11:10:58 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 06:12:40 --> Config Class Initialized
INFO - 2018-08-11 06:12:40 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:12:40 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:12:40 --> Utf8 Class Initialized
INFO - 2018-08-11 06:12:40 --> URI Class Initialized
INFO - 2018-08-11 06:12:40 --> Router Class Initialized
INFO - 2018-08-11 06:12:40 --> Output Class Initialized
INFO - 2018-08-11 06:12:40 --> Security Class Initialized
DEBUG - 2018-08-11 06:12:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:12:40 --> Input Class Initialized
INFO - 2018-08-11 06:12:40 --> Language Class Initialized
INFO - 2018-08-11 06:12:40 --> Language Class Initialized
INFO - 2018-08-11 06:12:40 --> Config Class Initialized
INFO - 2018-08-11 06:12:40 --> Loader Class Initialized
INFO - 2018-08-11 06:12:40 --> Helper loaded: security_helper
INFO - 2018-08-11 06:12:40 --> Helper loaded: form_helper
INFO - 2018-08-11 06:12:40 --> Helper loaded: url_helper
INFO - 2018-08-11 06:12:40 --> Helper loaded: global_helper
INFO - 2018-08-11 06:12:40 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:12:40 --> Helper loaded: text_helper
INFO - 2018-08-11 06:12:40 --> Database Driver Class Initialized
INFO - 2018-08-11 06:12:40 --> Model Class Initialized
INFO - 2018-08-11 06:12:40 --> Controller Class Initialized
DEBUG - 2018-08-11 06:12:40 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:12:40 --> Email Class Initialized
INFO - 2018-08-11 06:12:40 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:12:40 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:12:40 --> Helper loaded: language_helper
INFO - 2018-08-11 06:12:40 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:12:40 --> Model Class Initialized
INFO - 2018-08-11 06:12:40 --> Helper loaded: date_helper
INFO - 2018-08-11 11:12:40 --> Form Validation Class Initialized
INFO - 2018-08-11 11:12:40 --> Model Class Initialized
DEBUG - 2018-08-11 11:12:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:12:40 --> Model Class Initialized
DEBUG - 2018-08-11 11:12:40 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:12:40 --> Model Class Initialized
INFO - 2018-08-11 11:12:40 --> Model Class Initialized
DEBUG - 2018-08-11 11:12:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:12:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:12:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:12:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:12:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:12:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:12:40 --> Final output sent to browser
DEBUG - 2018-08-11 11:12:40 --> Total execution time: 0.2441
INFO - 2018-08-11 06:13:03 --> Config Class Initialized
INFO - 2018-08-11 06:13:03 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:13:03 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:13:03 --> Utf8 Class Initialized
INFO - 2018-08-11 06:13:03 --> URI Class Initialized
INFO - 2018-08-11 06:13:03 --> Router Class Initialized
INFO - 2018-08-11 06:13:03 --> Output Class Initialized
INFO - 2018-08-11 06:13:03 --> Security Class Initialized
DEBUG - 2018-08-11 06:13:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:13:03 --> Input Class Initialized
INFO - 2018-08-11 06:13:03 --> Language Class Initialized
INFO - 2018-08-11 06:13:03 --> Language Class Initialized
INFO - 2018-08-11 06:13:03 --> Config Class Initialized
INFO - 2018-08-11 06:13:03 --> Loader Class Initialized
INFO - 2018-08-11 06:13:03 --> Helper loaded: security_helper
INFO - 2018-08-11 06:13:03 --> Helper loaded: form_helper
INFO - 2018-08-11 06:13:03 --> Helper loaded: url_helper
INFO - 2018-08-11 06:13:03 --> Helper loaded: global_helper
INFO - 2018-08-11 06:13:03 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:13:03 --> Helper loaded: text_helper
INFO - 2018-08-11 06:13:03 --> Database Driver Class Initialized
INFO - 2018-08-11 06:13:03 --> Model Class Initialized
INFO - 2018-08-11 06:13:03 --> Controller Class Initialized
DEBUG - 2018-08-11 06:13:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:13:03 --> Email Class Initialized
INFO - 2018-08-11 06:13:03 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:13:03 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:13:03 --> Helper loaded: language_helper
INFO - 2018-08-11 06:13:03 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:13:03 --> Model Class Initialized
INFO - 2018-08-11 06:13:03 --> Helper loaded: date_helper
INFO - 2018-08-11 11:13:03 --> Form Validation Class Initialized
INFO - 2018-08-11 11:13:03 --> Model Class Initialized
DEBUG - 2018-08-11 11:13:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:13:03 --> Model Class Initialized
DEBUG - 2018-08-11 11:13:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:13:03 --> Model Class Initialized
INFO - 2018-08-11 11:13:03 --> Model Class Initialized
DEBUG - 2018-08-11 11:13:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:13:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:13:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:13:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:13:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:13:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:13:03 --> Final output sent to browser
DEBUG - 2018-08-11 11:13:03 --> Total execution time: 0.1498
INFO - 2018-08-11 06:13:21 --> Config Class Initialized
INFO - 2018-08-11 06:13:21 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:13:21 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:13:21 --> Utf8 Class Initialized
INFO - 2018-08-11 06:13:21 --> URI Class Initialized
DEBUG - 2018-08-11 06:13:21 --> No URI present. Default controller set.
INFO - 2018-08-11 06:13:21 --> Router Class Initialized
INFO - 2018-08-11 06:13:21 --> Output Class Initialized
INFO - 2018-08-11 06:13:21 --> Security Class Initialized
DEBUG - 2018-08-11 06:13:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:13:21 --> Input Class Initialized
INFO - 2018-08-11 06:13:21 --> Language Class Initialized
INFO - 2018-08-11 06:13:21 --> Language Class Initialized
INFO - 2018-08-11 06:13:21 --> Config Class Initialized
INFO - 2018-08-11 06:13:21 --> Loader Class Initialized
INFO - 2018-08-11 06:13:21 --> Helper loaded: security_helper
INFO - 2018-08-11 06:13:21 --> Helper loaded: form_helper
INFO - 2018-08-11 06:13:21 --> Helper loaded: url_helper
INFO - 2018-08-11 06:13:21 --> Helper loaded: global_helper
INFO - 2018-08-11 06:13:21 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:13:21 --> Helper loaded: text_helper
INFO - 2018-08-11 06:13:21 --> Database Driver Class Initialized
INFO - 2018-08-11 06:13:21 --> Model Class Initialized
INFO - 2018-08-11 06:13:21 --> Controller Class Initialized
DEBUG - 2018-08-11 06:13:21 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:13:21 --> Email Class Initialized
INFO - 2018-08-11 06:13:21 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:13:21 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:13:21 --> Helper loaded: language_helper
INFO - 2018-08-11 06:13:21 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:13:21 --> Model Class Initialized
INFO - 2018-08-11 06:13:21 --> Helper loaded: date_helper
INFO - 2018-08-11 11:13:21 --> Model Class Initialized
INFO - 2018-08-11 11:13:21 --> Form Validation Class Initialized
DEBUG - 2018-08-11 11:13:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:13:21 --> Model Class Initialized
DEBUG - 2018-08-11 11:13:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:13:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/sections/search_section_home.php
DEBUG - 2018-08-11 11:13:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/lesson_count.php
DEBUG - 2018-08-11 11:13:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/index.php
DEBUG - 2018-08-11 11:13:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:13:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 11:13:22 --> Final output sent to browser
DEBUG - 2018-08-11 11:13:22 --> Total execution time: 0.6511
INFO - 2018-08-11 06:13:23 --> Config Class Initialized
INFO - 2018-08-11 06:13:23 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:13:23 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:13:23 --> Utf8 Class Initialized
INFO - 2018-08-11 06:13:23 --> URI Class Initialized
INFO - 2018-08-11 06:13:23 --> Router Class Initialized
INFO - 2018-08-11 06:13:23 --> Output Class Initialized
INFO - 2018-08-11 06:13:23 --> Security Class Initialized
DEBUG - 2018-08-11 06:13:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:13:23 --> Input Class Initialized
INFO - 2018-08-11 06:13:23 --> Language Class Initialized
ERROR - 2018-08-11 06:13:23 --> 404 Page Not Found: /index
INFO - 2018-08-11 06:13:26 --> Config Class Initialized
INFO - 2018-08-11 06:13:26 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:13:26 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:13:26 --> Utf8 Class Initialized
INFO - 2018-08-11 06:13:26 --> URI Class Initialized
INFO - 2018-08-11 06:13:26 --> Router Class Initialized
INFO - 2018-08-11 06:13:26 --> Output Class Initialized
INFO - 2018-08-11 06:13:26 --> Security Class Initialized
DEBUG - 2018-08-11 06:13:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:13:26 --> Input Class Initialized
INFO - 2018-08-11 06:13:26 --> Language Class Initialized
INFO - 2018-08-11 06:13:26 --> Language Class Initialized
INFO - 2018-08-11 06:13:26 --> Config Class Initialized
INFO - 2018-08-11 06:13:26 --> Loader Class Initialized
INFO - 2018-08-11 06:13:26 --> Helper loaded: security_helper
INFO - 2018-08-11 06:13:26 --> Helper loaded: form_helper
INFO - 2018-08-11 06:13:26 --> Helper loaded: url_helper
INFO - 2018-08-11 06:13:26 --> Helper loaded: global_helper
INFO - 2018-08-11 06:13:26 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:13:26 --> Helper loaded: text_helper
INFO - 2018-08-11 06:13:26 --> Database Driver Class Initialized
INFO - 2018-08-11 06:13:26 --> Model Class Initialized
INFO - 2018-08-11 06:13:26 --> Controller Class Initialized
DEBUG - 2018-08-11 06:13:26 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:13:27 --> Email Class Initialized
INFO - 2018-08-11 06:13:27 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:13:27 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:13:27 --> Helper loaded: language_helper
INFO - 2018-08-11 06:13:27 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:13:27 --> Model Class Initialized
INFO - 2018-08-11 06:13:27 --> Helper loaded: date_helper
INFO - 2018-08-11 11:13:27 --> Model Class Initialized
INFO - 2018-08-11 11:13:27 --> Form Validation Class Initialized
DEBUG - 2018-08-11 11:13:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:13:27 --> Model Class Initialized
ERROR - 2018-08-11 11:13:27 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 11:13:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 11:13:27 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 06:19:52 --> Config Class Initialized
INFO - 2018-08-11 06:19:52 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:19:52 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:19:52 --> Utf8 Class Initialized
INFO - 2018-08-11 06:19:52 --> URI Class Initialized
INFO - 2018-08-11 06:19:52 --> Router Class Initialized
INFO - 2018-08-11 06:19:52 --> Output Class Initialized
INFO - 2018-08-11 06:19:52 --> Security Class Initialized
DEBUG - 2018-08-11 06:19:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:19:52 --> Input Class Initialized
INFO - 2018-08-11 06:19:52 --> Language Class Initialized
INFO - 2018-08-11 06:19:52 --> Language Class Initialized
INFO - 2018-08-11 06:19:52 --> Config Class Initialized
INFO - 2018-08-11 06:19:52 --> Loader Class Initialized
INFO - 2018-08-11 06:19:52 --> Helper loaded: security_helper
INFO - 2018-08-11 06:19:52 --> Helper loaded: form_helper
INFO - 2018-08-11 06:19:52 --> Helper loaded: url_helper
INFO - 2018-08-11 06:19:52 --> Helper loaded: global_helper
INFO - 2018-08-11 06:19:52 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:19:52 --> Helper loaded: text_helper
INFO - 2018-08-11 06:19:52 --> Database Driver Class Initialized
INFO - 2018-08-11 06:19:52 --> Model Class Initialized
INFO - 2018-08-11 06:19:52 --> Controller Class Initialized
DEBUG - 2018-08-11 06:19:52 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:19:52 --> Email Class Initialized
INFO - 2018-08-11 06:19:52 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:19:52 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:19:52 --> Helper loaded: language_helper
INFO - 2018-08-11 06:19:52 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:19:52 --> Model Class Initialized
INFO - 2018-08-11 06:19:52 --> Helper loaded: date_helper
INFO - 2018-08-11 11:19:52 --> Form Validation Class Initialized
INFO - 2018-08-11 11:19:52 --> Model Class Initialized
DEBUG - 2018-08-11 11:19:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:19:52 --> Model Class Initialized
DEBUG - 2018-08-11 11:19:52 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:19:52 --> Model Class Initialized
INFO - 2018-08-11 11:19:52 --> Model Class Initialized
DEBUG - 2018-08-11 11:19:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:19:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:19:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:19:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:19:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:19:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:19:52 --> Final output sent to browser
DEBUG - 2018-08-11 11:19:52 --> Total execution time: 0.3659
INFO - 2018-08-11 06:28:03 --> Config Class Initialized
INFO - 2018-08-11 06:28:03 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:28:03 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:28:03 --> Utf8 Class Initialized
INFO - 2018-08-11 06:28:03 --> URI Class Initialized
INFO - 2018-08-11 06:28:03 --> Router Class Initialized
INFO - 2018-08-11 06:28:03 --> Output Class Initialized
INFO - 2018-08-11 06:28:03 --> Security Class Initialized
DEBUG - 2018-08-11 06:28:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:28:03 --> Input Class Initialized
INFO - 2018-08-11 06:28:03 --> Language Class Initialized
INFO - 2018-08-11 06:28:03 --> Language Class Initialized
INFO - 2018-08-11 06:28:03 --> Config Class Initialized
INFO - 2018-08-11 06:28:03 --> Loader Class Initialized
INFO - 2018-08-11 06:28:03 --> Helper loaded: security_helper
INFO - 2018-08-11 06:28:03 --> Helper loaded: form_helper
INFO - 2018-08-11 06:28:03 --> Helper loaded: url_helper
INFO - 2018-08-11 06:28:03 --> Helper loaded: global_helper
INFO - 2018-08-11 06:28:03 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:28:03 --> Helper loaded: text_helper
INFO - 2018-08-11 06:28:03 --> Database Driver Class Initialized
INFO - 2018-08-11 06:28:03 --> Model Class Initialized
INFO - 2018-08-11 06:28:03 --> Controller Class Initialized
DEBUG - 2018-08-11 06:28:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:28:03 --> Email Class Initialized
INFO - 2018-08-11 06:28:03 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:28:03 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:28:03 --> Helper loaded: language_helper
INFO - 2018-08-11 06:28:03 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:28:03 --> Model Class Initialized
INFO - 2018-08-11 06:28:03 --> Helper loaded: date_helper
INFO - 2018-08-11 11:28:03 --> Form Validation Class Initialized
INFO - 2018-08-11 11:28:03 --> Model Class Initialized
DEBUG - 2018-08-11 11:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:28:03 --> Model Class Initialized
DEBUG - 2018-08-11 11:28:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:28:03 --> Model Class Initialized
INFO - 2018-08-11 11:28:03 --> Model Class Initialized
DEBUG - 2018-08-11 11:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:28:03 --> Final output sent to browser
DEBUG - 2018-08-11 11:28:03 --> Total execution time: 0.3772
INFO - 2018-08-11 06:28:04 --> Config Class Initialized
INFO - 2018-08-11 06:28:04 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:28:04 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:28:04 --> Utf8 Class Initialized
INFO - 2018-08-11 06:28:04 --> URI Class Initialized
INFO - 2018-08-11 06:28:04 --> Router Class Initialized
INFO - 2018-08-11 06:28:04 --> Output Class Initialized
INFO - 2018-08-11 06:28:04 --> Security Class Initialized
DEBUG - 2018-08-11 06:28:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:28:04 --> Input Class Initialized
INFO - 2018-08-11 06:28:04 --> Language Class Initialized
INFO - 2018-08-11 06:28:04 --> Language Class Initialized
INFO - 2018-08-11 06:28:04 --> Config Class Initialized
INFO - 2018-08-11 06:28:04 --> Loader Class Initialized
INFO - 2018-08-11 06:28:04 --> Helper loaded: security_helper
INFO - 2018-08-11 06:28:04 --> Helper loaded: form_helper
INFO - 2018-08-11 06:28:04 --> Helper loaded: url_helper
INFO - 2018-08-11 06:28:04 --> Helper loaded: global_helper
INFO - 2018-08-11 06:28:04 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:28:04 --> Helper loaded: text_helper
INFO - 2018-08-11 06:28:04 --> Database Driver Class Initialized
INFO - 2018-08-11 06:28:04 --> Model Class Initialized
INFO - 2018-08-11 06:28:04 --> Controller Class Initialized
DEBUG - 2018-08-11 06:28:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:28:04 --> Email Class Initialized
INFO - 2018-08-11 06:28:04 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:28:04 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:28:04 --> Helper loaded: language_helper
INFO - 2018-08-11 06:28:04 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:28:04 --> Model Class Initialized
INFO - 2018-08-11 06:28:04 --> Helper loaded: date_helper
INFO - 2018-08-11 11:28:04 --> Form Validation Class Initialized
INFO - 2018-08-11 11:28:04 --> Model Class Initialized
DEBUG - 2018-08-11 11:28:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:28:04 --> Model Class Initialized
DEBUG - 2018-08-11 11:28:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:28:04 --> Model Class Initialized
INFO - 2018-08-11 11:28:04 --> Model Class Initialized
DEBUG - 2018-08-11 11:28:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:28:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:28:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:28:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:28:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:28:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:28:04 --> Final output sent to browser
DEBUG - 2018-08-11 11:28:04 --> Total execution time: 0.1522
INFO - 2018-08-11 06:29:07 --> Config Class Initialized
INFO - 2018-08-11 06:29:07 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:29:07 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:29:07 --> Utf8 Class Initialized
INFO - 2018-08-11 06:29:07 --> URI Class Initialized
INFO - 2018-08-11 06:29:07 --> Router Class Initialized
INFO - 2018-08-11 06:29:07 --> Output Class Initialized
INFO - 2018-08-11 06:29:07 --> Security Class Initialized
DEBUG - 2018-08-11 06:29:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:29:07 --> Input Class Initialized
INFO - 2018-08-11 06:29:07 --> Language Class Initialized
INFO - 2018-08-11 06:29:07 --> Language Class Initialized
INFO - 2018-08-11 06:29:07 --> Config Class Initialized
INFO - 2018-08-11 06:29:07 --> Loader Class Initialized
INFO - 2018-08-11 06:29:07 --> Helper loaded: security_helper
INFO - 2018-08-11 06:29:07 --> Helper loaded: form_helper
INFO - 2018-08-11 06:29:07 --> Helper loaded: url_helper
INFO - 2018-08-11 06:29:07 --> Helper loaded: global_helper
INFO - 2018-08-11 06:29:07 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:29:07 --> Helper loaded: text_helper
INFO - 2018-08-11 06:29:07 --> Database Driver Class Initialized
INFO - 2018-08-11 06:29:07 --> Model Class Initialized
INFO - 2018-08-11 06:29:07 --> Controller Class Initialized
DEBUG - 2018-08-11 06:29:07 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:29:07 --> Email Class Initialized
INFO - 2018-08-11 06:29:07 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:29:07 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:29:07 --> Helper loaded: language_helper
INFO - 2018-08-11 06:29:07 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:29:07 --> Model Class Initialized
INFO - 2018-08-11 06:29:07 --> Helper loaded: date_helper
INFO - 2018-08-11 11:29:07 --> Form Validation Class Initialized
INFO - 2018-08-11 11:29:07 --> Model Class Initialized
DEBUG - 2018-08-11 11:29:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:29:07 --> Model Class Initialized
DEBUG - 2018-08-11 11:29:07 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:29:07 --> Model Class Initialized
INFO - 2018-08-11 11:29:07 --> Model Class Initialized
DEBUG - 2018-08-11 11:29:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:29:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:29:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:29:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:29:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:29:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:29:07 --> Final output sent to browser
DEBUG - 2018-08-11 11:29:07 --> Total execution time: 0.1523
INFO - 2018-08-11 06:34:47 --> Config Class Initialized
INFO - 2018-08-11 06:34:47 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:34:47 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:34:47 --> Utf8 Class Initialized
INFO - 2018-08-11 06:34:47 --> URI Class Initialized
INFO - 2018-08-11 06:34:47 --> Router Class Initialized
INFO - 2018-08-11 06:34:47 --> Output Class Initialized
INFO - 2018-08-11 06:34:47 --> Security Class Initialized
DEBUG - 2018-08-11 06:34:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:34:47 --> Input Class Initialized
INFO - 2018-08-11 06:34:47 --> Language Class Initialized
INFO - 2018-08-11 06:34:47 --> Language Class Initialized
INFO - 2018-08-11 06:34:47 --> Config Class Initialized
INFO - 2018-08-11 06:34:47 --> Loader Class Initialized
INFO - 2018-08-11 06:34:47 --> Helper loaded: security_helper
INFO - 2018-08-11 06:34:47 --> Helper loaded: form_helper
INFO - 2018-08-11 06:34:47 --> Helper loaded: url_helper
INFO - 2018-08-11 06:34:47 --> Helper loaded: global_helper
INFO - 2018-08-11 06:34:47 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:34:47 --> Helper loaded: text_helper
INFO - 2018-08-11 06:34:47 --> Database Driver Class Initialized
INFO - 2018-08-11 06:34:47 --> Model Class Initialized
INFO - 2018-08-11 06:34:47 --> Controller Class Initialized
DEBUG - 2018-08-11 06:34:47 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:34:47 --> Email Class Initialized
INFO - 2018-08-11 06:34:47 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:34:47 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:34:47 --> Helper loaded: language_helper
INFO - 2018-08-11 06:34:47 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:34:47 --> Model Class Initialized
INFO - 2018-08-11 06:34:47 --> Helper loaded: date_helper
INFO - 2018-08-11 11:34:47 --> Form Validation Class Initialized
INFO - 2018-08-11 11:34:47 --> Model Class Initialized
DEBUG - 2018-08-11 11:34:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:34:47 --> Model Class Initialized
DEBUG - 2018-08-11 11:34:47 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:34:47 --> Model Class Initialized
INFO - 2018-08-11 11:34:47 --> Model Class Initialized
DEBUG - 2018-08-11 11:34:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:34:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:34:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:34:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:34:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:34:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:34:47 --> Final output sent to browser
DEBUG - 2018-08-11 11:34:47 --> Total execution time: 0.2441
INFO - 2018-08-11 06:34:54 --> Config Class Initialized
INFO - 2018-08-11 06:34:54 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:34:54 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:34:54 --> Utf8 Class Initialized
INFO - 2018-08-11 06:34:54 --> URI Class Initialized
INFO - 2018-08-11 06:34:54 --> Router Class Initialized
INFO - 2018-08-11 06:34:54 --> Output Class Initialized
INFO - 2018-08-11 06:34:54 --> Security Class Initialized
DEBUG - 2018-08-11 06:34:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:34:54 --> Input Class Initialized
INFO - 2018-08-11 06:34:54 --> Language Class Initialized
INFO - 2018-08-11 06:34:54 --> Language Class Initialized
INFO - 2018-08-11 06:34:54 --> Config Class Initialized
INFO - 2018-08-11 06:34:54 --> Loader Class Initialized
INFO - 2018-08-11 06:34:54 --> Helper loaded: security_helper
INFO - 2018-08-11 06:34:54 --> Helper loaded: form_helper
INFO - 2018-08-11 06:34:54 --> Helper loaded: url_helper
INFO - 2018-08-11 06:34:54 --> Helper loaded: global_helper
INFO - 2018-08-11 06:34:54 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:34:54 --> Helper loaded: text_helper
INFO - 2018-08-11 06:34:54 --> Database Driver Class Initialized
INFO - 2018-08-11 06:34:54 --> Model Class Initialized
INFO - 2018-08-11 06:34:54 --> Controller Class Initialized
DEBUG - 2018-08-11 06:34:54 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:34:54 --> Email Class Initialized
INFO - 2018-08-11 06:34:54 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:34:54 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:34:54 --> Helper loaded: language_helper
INFO - 2018-08-11 06:34:54 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:34:54 --> Model Class Initialized
INFO - 2018-08-11 06:34:54 --> Helper loaded: date_helper
INFO - 2018-08-11 11:34:54 --> Form Validation Class Initialized
INFO - 2018-08-11 11:34:54 --> Model Class Initialized
DEBUG - 2018-08-11 11:34:54 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:34:54 --> Model Class Initialized
INFO - 2018-08-11 11:34:54 --> Model Class Initialized
DEBUG - 2018-08-11 11:34:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:34:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:34:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:34:54 --> Model Class Initialized
DEBUG - 2018-08-11 11:34:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:34:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:34:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:34:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:34:54 --> Final output sent to browser
DEBUG - 2018-08-11 11:34:54 --> Total execution time: 0.1801
INFO - 2018-08-11 06:37:46 --> Config Class Initialized
INFO - 2018-08-11 06:37:46 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:37:46 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:37:46 --> Utf8 Class Initialized
INFO - 2018-08-11 06:37:46 --> URI Class Initialized
INFO - 2018-08-11 06:37:46 --> Router Class Initialized
INFO - 2018-08-11 06:37:46 --> Output Class Initialized
INFO - 2018-08-11 06:37:46 --> Security Class Initialized
DEBUG - 2018-08-11 06:37:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:37:46 --> Input Class Initialized
INFO - 2018-08-11 06:37:46 --> Language Class Initialized
INFO - 2018-08-11 06:37:46 --> Language Class Initialized
INFO - 2018-08-11 06:37:46 --> Config Class Initialized
INFO - 2018-08-11 06:37:46 --> Loader Class Initialized
INFO - 2018-08-11 06:37:46 --> Helper loaded: security_helper
INFO - 2018-08-11 06:37:46 --> Helper loaded: form_helper
INFO - 2018-08-11 06:37:46 --> Helper loaded: url_helper
INFO - 2018-08-11 06:37:46 --> Helper loaded: global_helper
INFO - 2018-08-11 06:37:46 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:37:46 --> Helper loaded: text_helper
INFO - 2018-08-11 06:37:46 --> Database Driver Class Initialized
INFO - 2018-08-11 06:37:46 --> Model Class Initialized
INFO - 2018-08-11 06:37:46 --> Controller Class Initialized
DEBUG - 2018-08-11 06:37:46 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:37:46 --> Email Class Initialized
INFO - 2018-08-11 06:37:46 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:37:46 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:37:46 --> Helper loaded: language_helper
INFO - 2018-08-11 06:37:46 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:37:46 --> Model Class Initialized
INFO - 2018-08-11 06:37:46 --> Helper loaded: date_helper
INFO - 2018-08-11 11:37:46 --> Form Validation Class Initialized
INFO - 2018-08-11 11:37:46 --> Model Class Initialized
DEBUG - 2018-08-11 11:37:46 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:37:46 --> Model Class Initialized
INFO - 2018-08-11 11:37:46 --> Model Class Initialized
DEBUG - 2018-08-11 11:37:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:37:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:37:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:37:46 --> Model Class Initialized
DEBUG - 2018-08-11 11:37:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:37:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:37:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:37:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:37:46 --> Final output sent to browser
DEBUG - 2018-08-11 11:37:46 --> Total execution time: 0.3149
INFO - 2018-08-11 06:41:42 --> Config Class Initialized
INFO - 2018-08-11 06:41:42 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:41:42 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:41:42 --> Utf8 Class Initialized
INFO - 2018-08-11 06:41:42 --> URI Class Initialized
INFO - 2018-08-11 06:41:42 --> Router Class Initialized
INFO - 2018-08-11 06:41:42 --> Output Class Initialized
INFO - 2018-08-11 06:41:42 --> Security Class Initialized
DEBUG - 2018-08-11 06:41:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:41:42 --> Input Class Initialized
INFO - 2018-08-11 06:41:42 --> Language Class Initialized
INFO - 2018-08-11 06:41:42 --> Language Class Initialized
INFO - 2018-08-11 06:41:42 --> Config Class Initialized
INFO - 2018-08-11 06:41:42 --> Loader Class Initialized
INFO - 2018-08-11 06:41:42 --> Helper loaded: security_helper
INFO - 2018-08-11 06:41:42 --> Helper loaded: form_helper
INFO - 2018-08-11 06:41:42 --> Helper loaded: url_helper
INFO - 2018-08-11 06:41:42 --> Helper loaded: global_helper
INFO - 2018-08-11 06:41:42 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:41:42 --> Helper loaded: text_helper
INFO - 2018-08-11 06:41:42 --> Database Driver Class Initialized
INFO - 2018-08-11 06:41:42 --> Model Class Initialized
INFO - 2018-08-11 06:41:42 --> Controller Class Initialized
DEBUG - 2018-08-11 06:41:42 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:41:42 --> Email Class Initialized
INFO - 2018-08-11 06:41:42 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:41:42 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:41:42 --> Helper loaded: language_helper
INFO - 2018-08-11 06:41:42 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:41:42 --> Model Class Initialized
INFO - 2018-08-11 06:41:42 --> Helper loaded: date_helper
INFO - 2018-08-11 11:41:42 --> Form Validation Class Initialized
INFO - 2018-08-11 11:41:42 --> Model Class Initialized
DEBUG - 2018-08-11 11:41:42 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:41:42 --> Model Class Initialized
INFO - 2018-08-11 11:41:42 --> Model Class Initialized
DEBUG - 2018-08-11 11:41:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:41:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:41:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:41:42 --> Model Class Initialized
DEBUG - 2018-08-11 11:41:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:41:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:41:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:41:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:41:43 --> Final output sent to browser
DEBUG - 2018-08-11 11:41:43 --> Total execution time: 0.2771
INFO - 2018-08-11 06:43:02 --> Config Class Initialized
INFO - 2018-08-11 06:43:02 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:43:02 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:43:02 --> Utf8 Class Initialized
INFO - 2018-08-11 06:43:02 --> URI Class Initialized
INFO - 2018-08-11 06:43:02 --> Router Class Initialized
INFO - 2018-08-11 06:43:02 --> Output Class Initialized
INFO - 2018-08-11 06:43:02 --> Security Class Initialized
DEBUG - 2018-08-11 06:43:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:43:02 --> Input Class Initialized
INFO - 2018-08-11 06:43:02 --> Language Class Initialized
INFO - 2018-08-11 06:43:02 --> Language Class Initialized
INFO - 2018-08-11 06:43:02 --> Config Class Initialized
INFO - 2018-08-11 06:43:02 --> Loader Class Initialized
INFO - 2018-08-11 06:43:02 --> Helper loaded: security_helper
INFO - 2018-08-11 06:43:02 --> Helper loaded: form_helper
INFO - 2018-08-11 06:43:02 --> Helper loaded: url_helper
INFO - 2018-08-11 06:43:02 --> Helper loaded: global_helper
INFO - 2018-08-11 06:43:02 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:43:02 --> Helper loaded: text_helper
INFO - 2018-08-11 06:43:02 --> Database Driver Class Initialized
INFO - 2018-08-11 06:43:02 --> Model Class Initialized
INFO - 2018-08-11 06:43:02 --> Controller Class Initialized
DEBUG - 2018-08-11 06:43:02 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:43:02 --> Email Class Initialized
INFO - 2018-08-11 06:43:02 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:43:02 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:43:02 --> Helper loaded: language_helper
INFO - 2018-08-11 06:43:02 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:43:02 --> Model Class Initialized
INFO - 2018-08-11 06:43:02 --> Helper loaded: date_helper
INFO - 2018-08-11 11:43:02 --> Form Validation Class Initialized
INFO - 2018-08-11 11:43:02 --> Model Class Initialized
DEBUG - 2018-08-11 11:43:02 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:43:02 --> Model Class Initialized
INFO - 2018-08-11 11:43:02 --> Model Class Initialized
DEBUG - 2018-08-11 11:43:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:43:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:43:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:43:02 --> Model Class Initialized
DEBUG - 2018-08-11 11:43:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:43:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:43:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:43:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:43:02 --> Final output sent to browser
DEBUG - 2018-08-11 11:43:02 --> Total execution time: 0.1755
INFO - 2018-08-11 06:48:11 --> Config Class Initialized
INFO - 2018-08-11 06:48:11 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:48:11 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:48:11 --> Utf8 Class Initialized
INFO - 2018-08-11 06:48:11 --> URI Class Initialized
INFO - 2018-08-11 06:48:11 --> Router Class Initialized
INFO - 2018-08-11 06:48:11 --> Output Class Initialized
INFO - 2018-08-11 06:48:11 --> Security Class Initialized
DEBUG - 2018-08-11 06:48:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:48:11 --> Input Class Initialized
INFO - 2018-08-11 06:48:11 --> Language Class Initialized
INFO - 2018-08-11 06:48:11 --> Language Class Initialized
INFO - 2018-08-11 06:48:11 --> Config Class Initialized
INFO - 2018-08-11 06:48:11 --> Loader Class Initialized
INFO - 2018-08-11 06:48:11 --> Helper loaded: security_helper
INFO - 2018-08-11 06:48:11 --> Helper loaded: form_helper
INFO - 2018-08-11 06:48:11 --> Helper loaded: url_helper
INFO - 2018-08-11 06:48:11 --> Helper loaded: global_helper
INFO - 2018-08-11 06:48:11 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:48:11 --> Helper loaded: text_helper
INFO - 2018-08-11 06:48:11 --> Database Driver Class Initialized
INFO - 2018-08-11 06:48:11 --> Model Class Initialized
INFO - 2018-08-11 06:48:11 --> Controller Class Initialized
DEBUG - 2018-08-11 06:48:11 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:48:11 --> Email Class Initialized
INFO - 2018-08-11 06:48:11 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:48:11 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:48:11 --> Helper loaded: language_helper
INFO - 2018-08-11 06:48:11 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:48:11 --> Model Class Initialized
INFO - 2018-08-11 06:48:11 --> Helper loaded: date_helper
INFO - 2018-08-11 11:48:11 --> Form Validation Class Initialized
INFO - 2018-08-11 11:48:11 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:11 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:48:11 --> Model Class Initialized
INFO - 2018-08-11 11:48:11 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:48:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:48:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:48:11 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:48:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:48:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:48:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:48:11 --> Final output sent to browser
DEBUG - 2018-08-11 11:48:11 --> Total execution time: 0.2869
INFO - 2018-08-11 06:48:14 --> Config Class Initialized
INFO - 2018-08-11 06:48:14 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:48:14 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:48:14 --> Utf8 Class Initialized
INFO - 2018-08-11 06:48:14 --> URI Class Initialized
INFO - 2018-08-11 06:48:14 --> Router Class Initialized
INFO - 2018-08-11 06:48:14 --> Output Class Initialized
INFO - 2018-08-11 06:48:14 --> Security Class Initialized
DEBUG - 2018-08-11 06:48:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:48:14 --> Input Class Initialized
INFO - 2018-08-11 06:48:14 --> Language Class Initialized
INFO - 2018-08-11 06:48:14 --> Language Class Initialized
INFO - 2018-08-11 06:48:14 --> Config Class Initialized
INFO - 2018-08-11 06:48:14 --> Loader Class Initialized
INFO - 2018-08-11 06:48:14 --> Helper loaded: security_helper
INFO - 2018-08-11 06:48:14 --> Helper loaded: form_helper
INFO - 2018-08-11 06:48:14 --> Helper loaded: url_helper
INFO - 2018-08-11 06:48:14 --> Helper loaded: global_helper
INFO - 2018-08-11 06:48:14 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:48:14 --> Helper loaded: text_helper
INFO - 2018-08-11 06:48:14 --> Database Driver Class Initialized
INFO - 2018-08-11 06:48:14 --> Model Class Initialized
INFO - 2018-08-11 06:48:14 --> Controller Class Initialized
DEBUG - 2018-08-11 06:48:14 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:48:14 --> Email Class Initialized
INFO - 2018-08-11 06:48:14 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:48:14 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:48:14 --> Helper loaded: language_helper
INFO - 2018-08-11 06:48:14 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:48:14 --> Model Class Initialized
INFO - 2018-08-11 06:48:14 --> Helper loaded: date_helper
INFO - 2018-08-11 11:48:14 --> Form Validation Class Initialized
INFO - 2018-08-11 11:48:14 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:14 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:48:14 --> Model Class Initialized
INFO - 2018-08-11 11:48:14 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:48:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:48:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:48:14 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:48:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:48:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:48:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:48:14 --> Final output sent to browser
DEBUG - 2018-08-11 11:48:14 --> Total execution time: 0.2419
INFO - 2018-08-11 06:48:15 --> Config Class Initialized
INFO - 2018-08-11 06:48:15 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:48:15 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:48:15 --> Utf8 Class Initialized
INFO - 2018-08-11 06:48:15 --> URI Class Initialized
INFO - 2018-08-11 06:48:15 --> Router Class Initialized
INFO - 2018-08-11 06:48:15 --> Output Class Initialized
INFO - 2018-08-11 06:48:15 --> Security Class Initialized
DEBUG - 2018-08-11 06:48:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:48:15 --> Input Class Initialized
INFO - 2018-08-11 06:48:15 --> Language Class Initialized
INFO - 2018-08-11 06:48:15 --> Language Class Initialized
INFO - 2018-08-11 06:48:15 --> Config Class Initialized
INFO - 2018-08-11 06:48:15 --> Loader Class Initialized
INFO - 2018-08-11 06:48:15 --> Helper loaded: security_helper
INFO - 2018-08-11 06:48:15 --> Helper loaded: form_helper
INFO - 2018-08-11 06:48:15 --> Helper loaded: url_helper
INFO - 2018-08-11 06:48:15 --> Helper loaded: global_helper
INFO - 2018-08-11 06:48:15 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:48:15 --> Helper loaded: text_helper
INFO - 2018-08-11 06:48:15 --> Database Driver Class Initialized
INFO - 2018-08-11 06:48:15 --> Model Class Initialized
INFO - 2018-08-11 06:48:15 --> Controller Class Initialized
DEBUG - 2018-08-11 06:48:15 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:48:15 --> Email Class Initialized
INFO - 2018-08-11 06:48:15 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:48:15 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:48:15 --> Helper loaded: language_helper
INFO - 2018-08-11 06:48:15 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:48:15 --> Model Class Initialized
INFO - 2018-08-11 06:48:15 --> Helper loaded: date_helper
INFO - 2018-08-11 11:48:15 --> Form Validation Class Initialized
INFO - 2018-08-11 11:48:15 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:15 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:48:15 --> Model Class Initialized
INFO - 2018-08-11 11:48:15 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:48:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:48:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:48:15 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:48:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:48:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:48:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:48:15 --> Final output sent to browser
DEBUG - 2018-08-11 11:48:15 --> Total execution time: 0.1536
INFO - 2018-08-11 06:48:56 --> Config Class Initialized
INFO - 2018-08-11 06:48:56 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:48:56 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:48:56 --> Utf8 Class Initialized
INFO - 2018-08-11 06:48:56 --> URI Class Initialized
INFO - 2018-08-11 06:48:56 --> Router Class Initialized
INFO - 2018-08-11 06:48:56 --> Output Class Initialized
INFO - 2018-08-11 06:48:56 --> Security Class Initialized
DEBUG - 2018-08-11 06:48:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:48:56 --> Input Class Initialized
INFO - 2018-08-11 06:48:56 --> Language Class Initialized
INFO - 2018-08-11 06:48:56 --> Language Class Initialized
INFO - 2018-08-11 06:48:56 --> Config Class Initialized
INFO - 2018-08-11 06:48:56 --> Loader Class Initialized
INFO - 2018-08-11 06:48:56 --> Helper loaded: security_helper
INFO - 2018-08-11 06:48:56 --> Helper loaded: form_helper
INFO - 2018-08-11 06:48:56 --> Helper loaded: url_helper
INFO - 2018-08-11 06:48:56 --> Helper loaded: global_helper
INFO - 2018-08-11 06:48:56 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:48:56 --> Helper loaded: text_helper
INFO - 2018-08-11 06:48:56 --> Database Driver Class Initialized
INFO - 2018-08-11 06:48:56 --> Model Class Initialized
INFO - 2018-08-11 06:48:56 --> Controller Class Initialized
DEBUG - 2018-08-11 06:48:56 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:48:56 --> Email Class Initialized
INFO - 2018-08-11 06:48:56 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:48:56 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:48:56 --> Helper loaded: language_helper
INFO - 2018-08-11 06:48:56 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:48:56 --> Model Class Initialized
INFO - 2018-08-11 06:48:56 --> Helper loaded: date_helper
INFO - 2018-08-11 11:48:56 --> Form Validation Class Initialized
INFO - 2018-08-11 11:48:56 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:56 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:48:56 --> Model Class Initialized
INFO - 2018-08-11 11:48:56 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:48:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:48:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:48:56 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:48:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:48:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:48:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:48:56 --> Final output sent to browser
DEBUG - 2018-08-11 11:48:56 --> Total execution time: 0.1420
INFO - 2018-08-11 06:48:59 --> Config Class Initialized
INFO - 2018-08-11 06:48:59 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:48:59 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:48:59 --> Utf8 Class Initialized
INFO - 2018-08-11 06:48:59 --> URI Class Initialized
INFO - 2018-08-11 06:48:59 --> Router Class Initialized
INFO - 2018-08-11 06:48:59 --> Output Class Initialized
INFO - 2018-08-11 06:48:59 --> Security Class Initialized
DEBUG - 2018-08-11 06:48:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:48:59 --> Input Class Initialized
INFO - 2018-08-11 06:48:59 --> Language Class Initialized
INFO - 2018-08-11 06:48:59 --> Language Class Initialized
INFO - 2018-08-11 06:48:59 --> Config Class Initialized
INFO - 2018-08-11 06:48:59 --> Loader Class Initialized
INFO - 2018-08-11 06:48:59 --> Helper loaded: security_helper
INFO - 2018-08-11 06:48:59 --> Helper loaded: form_helper
INFO - 2018-08-11 06:48:59 --> Helper loaded: url_helper
INFO - 2018-08-11 06:48:59 --> Helper loaded: global_helper
INFO - 2018-08-11 06:48:59 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:48:59 --> Helper loaded: text_helper
INFO - 2018-08-11 06:48:59 --> Database Driver Class Initialized
INFO - 2018-08-11 06:48:59 --> Model Class Initialized
INFO - 2018-08-11 06:48:59 --> Controller Class Initialized
DEBUG - 2018-08-11 06:48:59 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:48:59 --> Email Class Initialized
INFO - 2018-08-11 06:48:59 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:48:59 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:48:59 --> Helper loaded: language_helper
INFO - 2018-08-11 06:48:59 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:48:59 --> Model Class Initialized
INFO - 2018-08-11 06:48:59 --> Helper loaded: date_helper
INFO - 2018-08-11 11:48:59 --> Form Validation Class Initialized
INFO - 2018-08-11 11:48:59 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:59 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:48:59 --> Model Class Initialized
INFO - 2018-08-11 11:48:59 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:48:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:48:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:48:59 --> Model Class Initialized
DEBUG - 2018-08-11 11:48:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:48:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:48:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:48:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:48:59 --> Final output sent to browser
DEBUG - 2018-08-11 11:48:59 --> Total execution time: 0.4004
INFO - 2018-08-11 06:49:24 --> Config Class Initialized
INFO - 2018-08-11 06:49:24 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:49:24 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:49:24 --> Utf8 Class Initialized
INFO - 2018-08-11 06:49:24 --> URI Class Initialized
INFO - 2018-08-11 06:49:24 --> Router Class Initialized
INFO - 2018-08-11 06:49:24 --> Output Class Initialized
INFO - 2018-08-11 06:49:24 --> Security Class Initialized
DEBUG - 2018-08-11 06:49:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:49:24 --> Input Class Initialized
INFO - 2018-08-11 06:49:24 --> Language Class Initialized
INFO - 2018-08-11 06:49:24 --> Language Class Initialized
INFO - 2018-08-11 06:49:24 --> Config Class Initialized
INFO - 2018-08-11 06:49:24 --> Loader Class Initialized
INFO - 2018-08-11 06:49:24 --> Helper loaded: security_helper
INFO - 2018-08-11 06:49:24 --> Helper loaded: form_helper
INFO - 2018-08-11 06:49:24 --> Helper loaded: url_helper
INFO - 2018-08-11 06:49:24 --> Helper loaded: global_helper
INFO - 2018-08-11 06:49:24 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:49:24 --> Helper loaded: text_helper
INFO - 2018-08-11 06:49:24 --> Database Driver Class Initialized
INFO - 2018-08-11 06:49:24 --> Model Class Initialized
INFO - 2018-08-11 06:49:24 --> Controller Class Initialized
DEBUG - 2018-08-11 06:49:24 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:49:24 --> Email Class Initialized
INFO - 2018-08-11 06:49:24 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:49:24 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:49:24 --> Helper loaded: language_helper
INFO - 2018-08-11 06:49:24 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:49:24 --> Model Class Initialized
INFO - 2018-08-11 06:49:24 --> Helper loaded: date_helper
INFO - 2018-08-11 11:49:24 --> Form Validation Class Initialized
INFO - 2018-08-11 11:49:24 --> Model Class Initialized
DEBUG - 2018-08-11 11:49:24 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:49:24 --> Model Class Initialized
INFO - 2018-08-11 11:49:24 --> Model Class Initialized
DEBUG - 2018-08-11 11:49:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:49:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:49:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:49:25 --> Model Class Initialized
DEBUG - 2018-08-11 11:49:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:49:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:49:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:49:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:49:25 --> Final output sent to browser
DEBUG - 2018-08-11 11:49:25 --> Total execution time: 0.1271
INFO - 2018-08-11 06:55:12 --> Config Class Initialized
INFO - 2018-08-11 06:55:12 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:55:12 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:55:12 --> Utf8 Class Initialized
INFO - 2018-08-11 06:55:12 --> URI Class Initialized
INFO - 2018-08-11 06:55:12 --> Router Class Initialized
INFO - 2018-08-11 06:55:12 --> Output Class Initialized
INFO - 2018-08-11 06:55:12 --> Security Class Initialized
DEBUG - 2018-08-11 06:55:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:55:12 --> Input Class Initialized
INFO - 2018-08-11 06:55:12 --> Language Class Initialized
INFO - 2018-08-11 06:55:12 --> Language Class Initialized
INFO - 2018-08-11 06:55:12 --> Config Class Initialized
INFO - 2018-08-11 06:55:12 --> Loader Class Initialized
INFO - 2018-08-11 06:55:12 --> Helper loaded: security_helper
INFO - 2018-08-11 06:55:12 --> Helper loaded: form_helper
INFO - 2018-08-11 06:55:12 --> Helper loaded: url_helper
INFO - 2018-08-11 06:55:12 --> Helper loaded: global_helper
INFO - 2018-08-11 06:55:12 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:55:12 --> Helper loaded: text_helper
INFO - 2018-08-11 06:55:12 --> Database Driver Class Initialized
INFO - 2018-08-11 06:55:12 --> Model Class Initialized
INFO - 2018-08-11 06:55:12 --> Controller Class Initialized
DEBUG - 2018-08-11 06:55:12 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:55:12 --> Email Class Initialized
INFO - 2018-08-11 06:55:12 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:55:12 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:55:12 --> Helper loaded: language_helper
INFO - 2018-08-11 06:55:12 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:55:12 --> Model Class Initialized
INFO - 2018-08-11 06:55:12 --> Helper loaded: date_helper
INFO - 2018-08-11 11:55:12 --> Form Validation Class Initialized
INFO - 2018-08-11 11:55:12 --> Model Class Initialized
DEBUG - 2018-08-11 11:55:12 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:55:12 --> Model Class Initialized
INFO - 2018-08-11 11:55:12 --> Model Class Initialized
DEBUG - 2018-08-11 11:55:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:55:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:55:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:55:13 --> Model Class Initialized
DEBUG - 2018-08-11 11:55:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:55:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:55:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:55:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:55:13 --> Final output sent to browser
DEBUG - 2018-08-11 11:55:13 --> Total execution time: 0.2158
INFO - 2018-08-11 06:58:26 --> Config Class Initialized
INFO - 2018-08-11 06:58:26 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:58:26 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:58:26 --> Utf8 Class Initialized
INFO - 2018-08-11 06:58:26 --> URI Class Initialized
INFO - 2018-08-11 06:58:26 --> Router Class Initialized
INFO - 2018-08-11 06:58:26 --> Output Class Initialized
INFO - 2018-08-11 06:58:26 --> Security Class Initialized
DEBUG - 2018-08-11 06:58:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:58:26 --> Input Class Initialized
INFO - 2018-08-11 06:58:26 --> Language Class Initialized
INFO - 2018-08-11 06:58:26 --> Language Class Initialized
INFO - 2018-08-11 06:58:26 --> Config Class Initialized
INFO - 2018-08-11 06:58:26 --> Loader Class Initialized
INFO - 2018-08-11 06:58:26 --> Helper loaded: security_helper
INFO - 2018-08-11 06:58:26 --> Helper loaded: form_helper
INFO - 2018-08-11 06:58:26 --> Helper loaded: url_helper
INFO - 2018-08-11 06:58:26 --> Helper loaded: global_helper
INFO - 2018-08-11 06:58:26 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:58:26 --> Helper loaded: text_helper
INFO - 2018-08-11 06:58:26 --> Database Driver Class Initialized
INFO - 2018-08-11 06:58:26 --> Model Class Initialized
INFO - 2018-08-11 06:58:26 --> Controller Class Initialized
DEBUG - 2018-08-11 06:58:26 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:58:26 --> Email Class Initialized
INFO - 2018-08-11 06:58:26 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:58:26 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:58:26 --> Helper loaded: language_helper
INFO - 2018-08-11 06:58:26 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:58:26 --> Model Class Initialized
INFO - 2018-08-11 06:58:26 --> Helper loaded: date_helper
INFO - 2018-08-11 11:58:26 --> Form Validation Class Initialized
INFO - 2018-08-11 11:58:26 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:26 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 11:58:26 --> Model Class Initialized
INFO - 2018-08-11 11:58:26 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:58:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:58:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:58:27 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:58:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 11:58:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:58:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 11:58:27 --> Final output sent to browser
DEBUG - 2018-08-11 11:58:27 --> Total execution time: 0.1969
INFO - 2018-08-11 06:58:32 --> Config Class Initialized
INFO - 2018-08-11 06:58:32 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:58:32 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:58:32 --> Utf8 Class Initialized
INFO - 2018-08-11 06:58:32 --> URI Class Initialized
INFO - 2018-08-11 06:58:32 --> Router Class Initialized
INFO - 2018-08-11 06:58:32 --> Output Class Initialized
INFO - 2018-08-11 06:58:32 --> Security Class Initialized
DEBUG - 2018-08-11 06:58:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:58:32 --> Input Class Initialized
INFO - 2018-08-11 06:58:32 --> Language Class Initialized
INFO - 2018-08-11 06:58:32 --> Language Class Initialized
INFO - 2018-08-11 06:58:32 --> Config Class Initialized
INFO - 2018-08-11 06:58:32 --> Loader Class Initialized
INFO - 2018-08-11 06:58:32 --> Helper loaded: security_helper
INFO - 2018-08-11 06:58:32 --> Helper loaded: form_helper
INFO - 2018-08-11 06:58:32 --> Helper loaded: url_helper
INFO - 2018-08-11 06:58:32 --> Helper loaded: global_helper
INFO - 2018-08-11 06:58:32 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:58:32 --> Helper loaded: text_helper
INFO - 2018-08-11 06:58:32 --> Database Driver Class Initialized
INFO - 2018-08-11 06:58:32 --> Model Class Initialized
INFO - 2018-08-11 06:58:32 --> Controller Class Initialized
DEBUG - 2018-08-11 06:58:32 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:58:32 --> Email Class Initialized
INFO - 2018-08-11 06:58:32 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:58:32 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:58:32 --> Helper loaded: language_helper
INFO - 2018-08-11 06:58:32 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:58:32 --> Model Class Initialized
INFO - 2018-08-11 06:58:32 --> Helper loaded: date_helper
INFO - 2018-08-11 11:58:32 --> Form Validation Class Initialized
INFO - 2018-08-11 11:58:32 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 11:58:32 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:58:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:58:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:58:32 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:58:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 11:58:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 11:58:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:58:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 11:58:32 --> Final output sent to browser
DEBUG - 2018-08-11 11:58:32 --> Total execution time: 0.1562
INFO - 2018-08-11 06:58:40 --> Config Class Initialized
INFO - 2018-08-11 06:58:40 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:58:40 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:58:40 --> Utf8 Class Initialized
INFO - 2018-08-11 06:58:40 --> URI Class Initialized
INFO - 2018-08-11 06:58:40 --> Router Class Initialized
INFO - 2018-08-11 06:58:40 --> Output Class Initialized
INFO - 2018-08-11 06:58:40 --> Security Class Initialized
DEBUG - 2018-08-11 06:58:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:58:40 --> Input Class Initialized
INFO - 2018-08-11 06:58:40 --> Language Class Initialized
INFO - 2018-08-11 06:58:40 --> Language Class Initialized
INFO - 2018-08-11 06:58:40 --> Config Class Initialized
INFO - 2018-08-11 06:58:40 --> Loader Class Initialized
INFO - 2018-08-11 06:58:40 --> Helper loaded: security_helper
INFO - 2018-08-11 06:58:40 --> Helper loaded: form_helper
INFO - 2018-08-11 06:58:40 --> Helper loaded: url_helper
INFO - 2018-08-11 06:58:40 --> Helper loaded: global_helper
INFO - 2018-08-11 06:58:40 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:58:40 --> Helper loaded: text_helper
INFO - 2018-08-11 06:58:40 --> Database Driver Class Initialized
INFO - 2018-08-11 06:58:40 --> Model Class Initialized
INFO - 2018-08-11 06:58:40 --> Controller Class Initialized
DEBUG - 2018-08-11 06:58:40 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:58:40 --> Email Class Initialized
INFO - 2018-08-11 06:58:40 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:58:40 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:58:40 --> Helper loaded: language_helper
INFO - 2018-08-11 06:58:40 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:58:40 --> Model Class Initialized
INFO - 2018-08-11 06:58:40 --> Helper loaded: date_helper
INFO - 2018-08-11 11:58:40 --> Form Validation Class Initialized
INFO - 2018-08-11 11:58:40 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 11:58:40 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:58:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:58:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:58:40 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:58:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 11:58:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 11:58:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:58:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 11:58:40 --> Final output sent to browser
DEBUG - 2018-08-11 11:58:40 --> Total execution time: 0.1128
INFO - 2018-08-11 06:58:43 --> Config Class Initialized
INFO - 2018-08-11 06:58:43 --> Hooks Class Initialized
DEBUG - 2018-08-11 06:58:43 --> UTF-8 Support Enabled
INFO - 2018-08-11 06:58:43 --> Utf8 Class Initialized
INFO - 2018-08-11 06:58:43 --> URI Class Initialized
INFO - 2018-08-11 06:58:43 --> Router Class Initialized
INFO - 2018-08-11 06:58:43 --> Output Class Initialized
INFO - 2018-08-11 06:58:43 --> Security Class Initialized
DEBUG - 2018-08-11 06:58:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 06:58:43 --> Input Class Initialized
INFO - 2018-08-11 06:58:43 --> Language Class Initialized
INFO - 2018-08-11 06:58:43 --> Language Class Initialized
INFO - 2018-08-11 06:58:43 --> Config Class Initialized
INFO - 2018-08-11 06:58:43 --> Loader Class Initialized
INFO - 2018-08-11 06:58:43 --> Helper loaded: security_helper
INFO - 2018-08-11 06:58:43 --> Helper loaded: form_helper
INFO - 2018-08-11 06:58:43 --> Helper loaded: url_helper
INFO - 2018-08-11 06:58:43 --> Helper loaded: global_helper
INFO - 2018-08-11 06:58:43 --> Helper loaded: inflector_helper
INFO - 2018-08-11 06:58:43 --> Helper loaded: text_helper
INFO - 2018-08-11 06:58:43 --> Database Driver Class Initialized
INFO - 2018-08-11 06:58:43 --> Model Class Initialized
INFO - 2018-08-11 06:58:43 --> Controller Class Initialized
DEBUG - 2018-08-11 06:58:43 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 06:58:43 --> Email Class Initialized
INFO - 2018-08-11 06:58:43 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 06:58:43 --> Helper loaded: cookie_helper
INFO - 2018-08-11 06:58:43 --> Helper loaded: language_helper
INFO - 2018-08-11 06:58:43 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 06:58:43 --> Model Class Initialized
INFO - 2018-08-11 06:58:43 --> Helper loaded: date_helper
INFO - 2018-08-11 11:58:43 --> Form Validation Class Initialized
INFO - 2018-08-11 11:58:43 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 11:58:43 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 11:58:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 11:58:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 11:58:43 --> Model Class Initialized
DEBUG - 2018-08-11 11:58:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 11:58:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 11:58:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 11:58:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 11:58:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 11:58:43 --> Final output sent to browser
DEBUG - 2018-08-11 11:58:43 --> Total execution time: 0.2173
INFO - 2018-08-11 07:00:28 --> Config Class Initialized
INFO - 2018-08-11 07:00:28 --> Hooks Class Initialized
DEBUG - 2018-08-11 07:00:28 --> UTF-8 Support Enabled
INFO - 2018-08-11 07:00:28 --> Utf8 Class Initialized
INFO - 2018-08-11 07:00:28 --> URI Class Initialized
INFO - 2018-08-11 07:00:28 --> Router Class Initialized
INFO - 2018-08-11 07:00:28 --> Output Class Initialized
INFO - 2018-08-11 07:00:28 --> Security Class Initialized
DEBUG - 2018-08-11 07:00:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 07:00:28 --> Input Class Initialized
INFO - 2018-08-11 07:00:28 --> Language Class Initialized
INFO - 2018-08-11 07:00:28 --> Language Class Initialized
INFO - 2018-08-11 07:00:28 --> Config Class Initialized
INFO - 2018-08-11 07:00:28 --> Loader Class Initialized
INFO - 2018-08-11 07:00:28 --> Helper loaded: security_helper
INFO - 2018-08-11 07:00:28 --> Helper loaded: form_helper
INFO - 2018-08-11 07:00:28 --> Helper loaded: url_helper
INFO - 2018-08-11 07:00:28 --> Helper loaded: global_helper
INFO - 2018-08-11 07:00:28 --> Helper loaded: inflector_helper
INFO - 2018-08-11 07:00:28 --> Helper loaded: text_helper
INFO - 2018-08-11 07:00:28 --> Database Driver Class Initialized
INFO - 2018-08-11 07:00:28 --> Model Class Initialized
INFO - 2018-08-11 07:00:28 --> Controller Class Initialized
DEBUG - 2018-08-11 07:00:28 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 07:00:28 --> Email Class Initialized
INFO - 2018-08-11 07:00:28 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 07:00:28 --> Helper loaded: cookie_helper
INFO - 2018-08-11 07:00:28 --> Helper loaded: language_helper
INFO - 2018-08-11 07:00:28 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 07:00:28 --> Model Class Initialized
INFO - 2018-08-11 07:00:28 --> Helper loaded: date_helper
INFO - 2018-08-11 12:00:28 --> Form Validation Class Initialized
INFO - 2018-08-11 12:00:28 --> Model Class Initialized
DEBUG - 2018-08-11 12:00:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 12:00:28 --> Model Class Initialized
DEBUG - 2018-08-11 12:00:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 12:00:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 12:00:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 12:00:28 --> Model Class Initialized
DEBUG - 2018-08-11 12:00:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 12:00:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 12:00:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 12:00:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 12:00:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 12:00:29 --> Final output sent to browser
DEBUG - 2018-08-11 12:00:29 --> Total execution time: 0.2717
INFO - 2018-08-11 07:01:27 --> Config Class Initialized
INFO - 2018-08-11 07:01:27 --> Hooks Class Initialized
DEBUG - 2018-08-11 07:01:27 --> UTF-8 Support Enabled
INFO - 2018-08-11 07:01:27 --> Utf8 Class Initialized
INFO - 2018-08-11 07:01:27 --> URI Class Initialized
INFO - 2018-08-11 07:01:27 --> Router Class Initialized
INFO - 2018-08-11 07:01:27 --> Output Class Initialized
INFO - 2018-08-11 07:01:27 --> Security Class Initialized
DEBUG - 2018-08-11 07:01:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 07:01:27 --> Input Class Initialized
INFO - 2018-08-11 07:01:27 --> Language Class Initialized
INFO - 2018-08-11 07:01:27 --> Language Class Initialized
INFO - 2018-08-11 07:01:27 --> Config Class Initialized
INFO - 2018-08-11 07:01:27 --> Loader Class Initialized
INFO - 2018-08-11 07:01:27 --> Helper loaded: security_helper
INFO - 2018-08-11 07:01:27 --> Helper loaded: form_helper
INFO - 2018-08-11 07:01:27 --> Helper loaded: url_helper
INFO - 2018-08-11 07:01:27 --> Helper loaded: global_helper
INFO - 2018-08-11 07:01:27 --> Helper loaded: inflector_helper
INFO - 2018-08-11 07:01:27 --> Helper loaded: text_helper
INFO - 2018-08-11 07:01:27 --> Database Driver Class Initialized
INFO - 2018-08-11 07:01:27 --> Model Class Initialized
INFO - 2018-08-11 07:01:27 --> Controller Class Initialized
DEBUG - 2018-08-11 07:01:27 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 07:01:27 --> Email Class Initialized
INFO - 2018-08-11 07:01:27 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 07:01:27 --> Helper loaded: cookie_helper
INFO - 2018-08-11 07:01:27 --> Helper loaded: language_helper
INFO - 2018-08-11 07:01:27 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 07:01:27 --> Model Class Initialized
INFO - 2018-08-11 07:01:27 --> Helper loaded: date_helper
INFO - 2018-08-11 12:01:27 --> Form Validation Class Initialized
INFO - 2018-08-11 12:01:27 --> Model Class Initialized
DEBUG - 2018-08-11 12:01:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 12:01:27 --> Model Class Initialized
DEBUG - 2018-08-11 12:01:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 12:01:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 12:01:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 12:01:27 --> Model Class Initialized
DEBUG - 2018-08-11 12:01:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 12:01:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 12:01:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 12:01:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 12:01:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 12:01:27 --> Final output sent to browser
DEBUG - 2018-08-11 12:01:27 --> Total execution time: 0.1483
INFO - 2018-08-11 07:01:34 --> Config Class Initialized
INFO - 2018-08-11 07:01:34 --> Hooks Class Initialized
DEBUG - 2018-08-11 07:01:34 --> UTF-8 Support Enabled
INFO - 2018-08-11 07:01:34 --> Utf8 Class Initialized
INFO - 2018-08-11 07:01:34 --> URI Class Initialized
INFO - 2018-08-11 07:01:34 --> Router Class Initialized
INFO - 2018-08-11 07:01:34 --> Output Class Initialized
INFO - 2018-08-11 07:01:34 --> Security Class Initialized
DEBUG - 2018-08-11 07:01:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 07:01:34 --> Input Class Initialized
INFO - 2018-08-11 07:01:34 --> Language Class Initialized
INFO - 2018-08-11 07:01:34 --> Language Class Initialized
INFO - 2018-08-11 07:01:34 --> Config Class Initialized
INFO - 2018-08-11 07:01:34 --> Loader Class Initialized
INFO - 2018-08-11 07:01:34 --> Helper loaded: security_helper
INFO - 2018-08-11 07:01:34 --> Helper loaded: form_helper
INFO - 2018-08-11 07:01:34 --> Helper loaded: url_helper
INFO - 2018-08-11 07:01:34 --> Helper loaded: global_helper
INFO - 2018-08-11 07:01:34 --> Helper loaded: inflector_helper
INFO - 2018-08-11 07:01:34 --> Helper loaded: text_helper
INFO - 2018-08-11 07:01:34 --> Database Driver Class Initialized
INFO - 2018-08-11 07:01:34 --> Model Class Initialized
INFO - 2018-08-11 07:01:34 --> Controller Class Initialized
DEBUG - 2018-08-11 07:01:34 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 07:01:34 --> Email Class Initialized
INFO - 2018-08-11 07:01:34 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 07:01:34 --> Helper loaded: cookie_helper
INFO - 2018-08-11 07:01:34 --> Helper loaded: language_helper
INFO - 2018-08-11 07:01:34 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 07:01:34 --> Model Class Initialized
INFO - 2018-08-11 07:01:34 --> Helper loaded: date_helper
INFO - 2018-08-11 12:01:34 --> Form Validation Class Initialized
INFO - 2018-08-11 12:01:34 --> Model Class Initialized
DEBUG - 2018-08-11 12:01:34 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 12:01:34 --> Model Class Initialized
INFO - 2018-08-11 12:01:34 --> Model Class Initialized
DEBUG - 2018-08-11 12:01:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 12:01:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 12:01:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 12:01:34 --> Model Class Initialized
DEBUG - 2018-08-11 12:01:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 12:01:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 12:01:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 12:01:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 12:01:34 --> Final output sent to browser
DEBUG - 2018-08-11 12:01:34 --> Total execution time: 0.1671
INFO - 2018-08-11 07:01:38 --> Config Class Initialized
INFO - 2018-08-11 07:01:38 --> Hooks Class Initialized
DEBUG - 2018-08-11 07:01:38 --> UTF-8 Support Enabled
INFO - 2018-08-11 07:01:38 --> Utf8 Class Initialized
INFO - 2018-08-11 07:01:38 --> URI Class Initialized
INFO - 2018-08-11 07:01:38 --> Router Class Initialized
INFO - 2018-08-11 07:01:38 --> Output Class Initialized
INFO - 2018-08-11 07:01:38 --> Security Class Initialized
DEBUG - 2018-08-11 07:01:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 07:01:38 --> Input Class Initialized
INFO - 2018-08-11 07:01:38 --> Language Class Initialized
INFO - 2018-08-11 07:01:38 --> Language Class Initialized
INFO - 2018-08-11 07:01:38 --> Config Class Initialized
INFO - 2018-08-11 07:01:38 --> Loader Class Initialized
INFO - 2018-08-11 07:01:38 --> Helper loaded: security_helper
INFO - 2018-08-11 07:01:38 --> Helper loaded: form_helper
INFO - 2018-08-11 07:01:38 --> Helper loaded: url_helper
INFO - 2018-08-11 07:01:38 --> Helper loaded: global_helper
INFO - 2018-08-11 07:01:38 --> Helper loaded: inflector_helper
INFO - 2018-08-11 07:01:38 --> Helper loaded: text_helper
INFO - 2018-08-11 07:01:38 --> Database Driver Class Initialized
INFO - 2018-08-11 07:01:38 --> Model Class Initialized
INFO - 2018-08-11 07:01:38 --> Controller Class Initialized
DEBUG - 2018-08-11 07:01:38 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 07:01:38 --> Email Class Initialized
INFO - 2018-08-11 07:01:38 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 07:01:38 --> Helper loaded: cookie_helper
INFO - 2018-08-11 07:01:38 --> Helper loaded: language_helper
INFO - 2018-08-11 07:01:38 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 07:01:38 --> Model Class Initialized
INFO - 2018-08-11 07:01:38 --> Helper loaded: date_helper
INFO - 2018-08-11 12:01:38 --> Form Validation Class Initialized
INFO - 2018-08-11 12:01:38 --> Model Class Initialized
DEBUG - 2018-08-11 12:01:38 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 12:01:38 --> Model Class Initialized
INFO - 2018-08-11 12:01:38 --> Model Class Initialized
DEBUG - 2018-08-11 12:01:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 12:01:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 12:01:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 12:01:38 --> Model Class Initialized
DEBUG - 2018-08-11 12:01:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 12:01:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 12:01:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 12:01:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 12:01:38 --> Final output sent to browser
DEBUG - 2018-08-11 12:01:38 --> Total execution time: 0.1135
INFO - 2018-08-11 07:02:19 --> Config Class Initialized
INFO - 2018-08-11 07:02:19 --> Hooks Class Initialized
DEBUG - 2018-08-11 07:02:19 --> UTF-8 Support Enabled
INFO - 2018-08-11 07:02:19 --> Utf8 Class Initialized
INFO - 2018-08-11 07:02:19 --> URI Class Initialized
INFO - 2018-08-11 07:02:19 --> Router Class Initialized
INFO - 2018-08-11 07:02:19 --> Output Class Initialized
INFO - 2018-08-11 07:02:19 --> Security Class Initialized
DEBUG - 2018-08-11 07:02:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 07:02:19 --> Input Class Initialized
INFO - 2018-08-11 07:02:19 --> Language Class Initialized
INFO - 2018-08-11 07:02:20 --> Language Class Initialized
INFO - 2018-08-11 07:02:20 --> Config Class Initialized
INFO - 2018-08-11 07:02:20 --> Loader Class Initialized
INFO - 2018-08-11 07:02:20 --> Helper loaded: security_helper
INFO - 2018-08-11 07:02:20 --> Helper loaded: form_helper
INFO - 2018-08-11 07:02:20 --> Helper loaded: url_helper
INFO - 2018-08-11 07:02:20 --> Helper loaded: global_helper
INFO - 2018-08-11 07:02:20 --> Helper loaded: inflector_helper
INFO - 2018-08-11 07:02:20 --> Helper loaded: text_helper
INFO - 2018-08-11 07:02:20 --> Database Driver Class Initialized
INFO - 2018-08-11 07:02:20 --> Model Class Initialized
INFO - 2018-08-11 07:02:20 --> Controller Class Initialized
DEBUG - 2018-08-11 07:02:20 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 07:02:20 --> Email Class Initialized
INFO - 2018-08-11 07:02:20 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 07:02:20 --> Helper loaded: cookie_helper
INFO - 2018-08-11 07:02:20 --> Helper loaded: language_helper
INFO - 2018-08-11 07:02:20 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 07:02:20 --> Model Class Initialized
INFO - 2018-08-11 07:02:20 --> Helper loaded: date_helper
INFO - 2018-08-11 12:02:20 --> Form Validation Class Initialized
INFO - 2018-08-11 12:02:20 --> Model Class Initialized
DEBUG - 2018-08-11 12:02:20 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 12:02:20 --> Model Class Initialized
INFO - 2018-08-11 12:02:20 --> Model Class Initialized
DEBUG - 2018-08-11 12:02:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 12:02:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 12:02:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 12:02:20 --> Model Class Initialized
DEBUG - 2018-08-11 12:02:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 12:02:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 12:02:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 12:02:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 12:02:20 --> Final output sent to browser
DEBUG - 2018-08-11 12:02:20 --> Total execution time: 0.1234
INFO - 2018-08-11 07:05:58 --> Config Class Initialized
INFO - 2018-08-11 07:05:58 --> Hooks Class Initialized
DEBUG - 2018-08-11 07:05:58 --> UTF-8 Support Enabled
INFO - 2018-08-11 07:05:58 --> Utf8 Class Initialized
INFO - 2018-08-11 07:05:58 --> URI Class Initialized
INFO - 2018-08-11 07:05:58 --> Router Class Initialized
INFO - 2018-08-11 07:05:58 --> Output Class Initialized
INFO - 2018-08-11 07:05:58 --> Security Class Initialized
DEBUG - 2018-08-11 07:05:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 07:05:58 --> Input Class Initialized
INFO - 2018-08-11 07:05:58 --> Language Class Initialized
INFO - 2018-08-11 07:05:58 --> Language Class Initialized
INFO - 2018-08-11 07:05:58 --> Config Class Initialized
INFO - 2018-08-11 07:05:58 --> Loader Class Initialized
INFO - 2018-08-11 07:05:58 --> Helper loaded: security_helper
INFO - 2018-08-11 07:05:58 --> Helper loaded: form_helper
INFO - 2018-08-11 07:05:58 --> Helper loaded: url_helper
INFO - 2018-08-11 07:05:58 --> Helper loaded: global_helper
INFO - 2018-08-11 07:05:58 --> Helper loaded: inflector_helper
INFO - 2018-08-11 07:05:58 --> Helper loaded: text_helper
INFO - 2018-08-11 07:05:58 --> Database Driver Class Initialized
INFO - 2018-08-11 07:05:58 --> Model Class Initialized
INFO - 2018-08-11 07:05:58 --> Controller Class Initialized
DEBUG - 2018-08-11 07:05:58 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 07:05:58 --> Email Class Initialized
INFO - 2018-08-11 07:05:58 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 07:05:58 --> Helper loaded: cookie_helper
INFO - 2018-08-11 07:05:58 --> Helper loaded: language_helper
INFO - 2018-08-11 07:05:58 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 07:05:58 --> Model Class Initialized
INFO - 2018-08-11 07:05:58 --> Helper loaded: date_helper
INFO - 2018-08-11 12:05:58 --> Form Validation Class Initialized
INFO - 2018-08-11 12:05:58 --> Model Class Initialized
DEBUG - 2018-08-11 12:05:58 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 12:05:58 --> Model Class Initialized
INFO - 2018-08-11 12:05:58 --> Model Class Initialized
DEBUG - 2018-08-11 12:05:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 12:05:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 12:05:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 12:05:58 --> Model Class Initialized
DEBUG - 2018-08-11 12:05:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 12:05:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 12:05:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 12:05:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 12:05:58 --> Final output sent to browser
DEBUG - 2018-08-11 12:05:58 --> Total execution time: 0.3004
INFO - 2018-08-11 07:07:31 --> Config Class Initialized
INFO - 2018-08-11 07:07:31 --> Hooks Class Initialized
DEBUG - 2018-08-11 07:07:31 --> UTF-8 Support Enabled
INFO - 2018-08-11 07:07:31 --> Utf8 Class Initialized
INFO - 2018-08-11 07:07:31 --> URI Class Initialized
INFO - 2018-08-11 07:07:31 --> Router Class Initialized
INFO - 2018-08-11 07:07:31 --> Output Class Initialized
INFO - 2018-08-11 07:07:31 --> Security Class Initialized
DEBUG - 2018-08-11 07:07:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 07:07:31 --> Input Class Initialized
INFO - 2018-08-11 07:07:31 --> Language Class Initialized
INFO - 2018-08-11 07:07:31 --> Language Class Initialized
INFO - 2018-08-11 07:07:31 --> Config Class Initialized
INFO - 2018-08-11 07:07:31 --> Loader Class Initialized
INFO - 2018-08-11 07:07:31 --> Helper loaded: security_helper
INFO - 2018-08-11 07:07:31 --> Helper loaded: form_helper
INFO - 2018-08-11 07:07:31 --> Helper loaded: url_helper
INFO - 2018-08-11 07:07:31 --> Helper loaded: global_helper
INFO - 2018-08-11 07:07:31 --> Helper loaded: inflector_helper
INFO - 2018-08-11 07:07:31 --> Helper loaded: text_helper
INFO - 2018-08-11 07:07:31 --> Database Driver Class Initialized
INFO - 2018-08-11 07:07:31 --> Model Class Initialized
INFO - 2018-08-11 07:07:31 --> Controller Class Initialized
DEBUG - 2018-08-11 07:07:31 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 07:07:31 --> Email Class Initialized
INFO - 2018-08-11 07:07:31 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 07:07:31 --> Helper loaded: cookie_helper
INFO - 2018-08-11 07:07:31 --> Helper loaded: language_helper
INFO - 2018-08-11 07:07:31 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 07:07:31 --> Model Class Initialized
INFO - 2018-08-11 07:07:31 --> Helper loaded: date_helper
INFO - 2018-08-11 12:07:31 --> Form Validation Class Initialized
INFO - 2018-08-11 12:07:31 --> Model Class Initialized
DEBUG - 2018-08-11 12:07:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 12:07:31 --> Model Class Initialized
DEBUG - 2018-08-11 12:07:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 12:07:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 12:07:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 12:07:31 --> Model Class Initialized
DEBUG - 2018-08-11 12:07:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 12:07:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 12:07:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 12:07:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 12:07:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 12:07:31 --> Final output sent to browser
DEBUG - 2018-08-11 12:07:31 --> Total execution time: 0.2790
INFO - 2018-08-11 07:07:38 --> Config Class Initialized
INFO - 2018-08-11 07:07:38 --> Hooks Class Initialized
DEBUG - 2018-08-11 07:07:38 --> UTF-8 Support Enabled
INFO - 2018-08-11 07:07:38 --> Utf8 Class Initialized
INFO - 2018-08-11 07:07:38 --> URI Class Initialized
INFO - 2018-08-11 07:07:38 --> Router Class Initialized
INFO - 2018-08-11 07:07:38 --> Output Class Initialized
INFO - 2018-08-11 07:07:38 --> Security Class Initialized
DEBUG - 2018-08-11 07:07:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 07:07:38 --> Input Class Initialized
INFO - 2018-08-11 07:07:38 --> Language Class Initialized
INFO - 2018-08-11 07:07:38 --> Language Class Initialized
INFO - 2018-08-11 07:07:38 --> Config Class Initialized
INFO - 2018-08-11 07:07:38 --> Loader Class Initialized
INFO - 2018-08-11 07:07:38 --> Helper loaded: security_helper
INFO - 2018-08-11 07:07:38 --> Helper loaded: form_helper
INFO - 2018-08-11 07:07:38 --> Helper loaded: url_helper
INFO - 2018-08-11 07:07:38 --> Helper loaded: global_helper
INFO - 2018-08-11 07:07:38 --> Helper loaded: inflector_helper
INFO - 2018-08-11 07:07:38 --> Helper loaded: text_helper
INFO - 2018-08-11 07:07:38 --> Database Driver Class Initialized
INFO - 2018-08-11 07:07:38 --> Model Class Initialized
INFO - 2018-08-11 07:07:38 --> Controller Class Initialized
DEBUG - 2018-08-11 07:07:38 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 07:07:38 --> Email Class Initialized
INFO - 2018-08-11 07:07:38 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 07:07:38 --> Helper loaded: cookie_helper
INFO - 2018-08-11 07:07:38 --> Helper loaded: language_helper
INFO - 2018-08-11 07:07:38 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 07:07:38 --> Model Class Initialized
INFO - 2018-08-11 07:07:38 --> Helper loaded: date_helper
INFO - 2018-08-11 12:07:38 --> Form Validation Class Initialized
INFO - 2018-08-11 12:07:38 --> Model Class Initialized
DEBUG - 2018-08-11 12:07:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 12:07:38 --> Model Class Initialized
DEBUG - 2018-08-11 12:07:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 12:07:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 12:07:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 12:07:38 --> Model Class Initialized
DEBUG - 2018-08-11 12:07:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 12:07:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 12:07:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 12:07:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 12:07:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 12:07:38 --> Final output sent to browser
DEBUG - 2018-08-11 12:07:38 --> Total execution time: 0.1230
INFO - 2018-08-11 07:59:43 --> Config Class Initialized
INFO - 2018-08-11 07:59:43 --> Hooks Class Initialized
DEBUG - 2018-08-11 07:59:43 --> UTF-8 Support Enabled
INFO - 2018-08-11 07:59:43 --> Utf8 Class Initialized
INFO - 2018-08-11 07:59:43 --> URI Class Initialized
INFO - 2018-08-11 07:59:43 --> Router Class Initialized
INFO - 2018-08-11 07:59:43 --> Output Class Initialized
INFO - 2018-08-11 07:59:43 --> Security Class Initialized
DEBUG - 2018-08-11 07:59:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 07:59:43 --> Input Class Initialized
INFO - 2018-08-11 07:59:43 --> Language Class Initialized
INFO - 2018-08-11 07:59:43 --> Language Class Initialized
INFO - 2018-08-11 07:59:43 --> Config Class Initialized
INFO - 2018-08-11 07:59:43 --> Loader Class Initialized
INFO - 2018-08-11 07:59:43 --> Helper loaded: security_helper
INFO - 2018-08-11 07:59:43 --> Helper loaded: form_helper
INFO - 2018-08-11 07:59:43 --> Helper loaded: url_helper
INFO - 2018-08-11 07:59:43 --> Helper loaded: global_helper
INFO - 2018-08-11 07:59:43 --> Helper loaded: inflector_helper
INFO - 2018-08-11 07:59:43 --> Helper loaded: text_helper
INFO - 2018-08-11 07:59:43 --> Database Driver Class Initialized
INFO - 2018-08-11 07:59:43 --> Model Class Initialized
INFO - 2018-08-11 07:59:43 --> Controller Class Initialized
DEBUG - 2018-08-11 07:59:43 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 07:59:43 --> Email Class Initialized
INFO - 2018-08-11 07:59:43 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 07:59:43 --> Helper loaded: cookie_helper
INFO - 2018-08-11 07:59:43 --> Helper loaded: language_helper
INFO - 2018-08-11 07:59:43 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 07:59:43 --> Model Class Initialized
INFO - 2018-08-11 07:59:43 --> Helper loaded: date_helper
INFO - 2018-08-11 12:59:43 --> Form Validation Class Initialized
INFO - 2018-08-11 12:59:43 --> Model Class Initialized
DEBUG - 2018-08-11 12:59:43 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 12:59:43 --> Model Class Initialized
INFO - 2018-08-11 12:59:43 --> Model Class Initialized
DEBUG - 2018-08-11 12:59:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 12:59:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 12:59:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 12:59:43 --> Model Class Initialized
DEBUG - 2018-08-11 12:59:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 12:59:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 12:59:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 12:59:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 12:59:44 --> Final output sent to browser
DEBUG - 2018-08-11 12:59:44 --> Total execution time: 0.2496
INFO - 2018-08-11 07:59:47 --> Config Class Initialized
INFO - 2018-08-11 07:59:47 --> Hooks Class Initialized
DEBUG - 2018-08-11 07:59:47 --> UTF-8 Support Enabled
INFO - 2018-08-11 07:59:47 --> Utf8 Class Initialized
INFO - 2018-08-11 07:59:47 --> URI Class Initialized
INFO - 2018-08-11 07:59:47 --> Router Class Initialized
INFO - 2018-08-11 07:59:47 --> Output Class Initialized
INFO - 2018-08-11 07:59:47 --> Security Class Initialized
DEBUG - 2018-08-11 07:59:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 07:59:47 --> Input Class Initialized
INFO - 2018-08-11 07:59:47 --> Language Class Initialized
INFO - 2018-08-11 07:59:47 --> Language Class Initialized
INFO - 2018-08-11 07:59:47 --> Config Class Initialized
INFO - 2018-08-11 07:59:47 --> Loader Class Initialized
INFO - 2018-08-11 07:59:47 --> Helper loaded: security_helper
INFO - 2018-08-11 07:59:47 --> Helper loaded: form_helper
INFO - 2018-08-11 07:59:47 --> Helper loaded: url_helper
INFO - 2018-08-11 07:59:47 --> Helper loaded: global_helper
INFO - 2018-08-11 07:59:47 --> Helper loaded: inflector_helper
INFO - 2018-08-11 07:59:47 --> Helper loaded: text_helper
INFO - 2018-08-11 07:59:47 --> Database Driver Class Initialized
INFO - 2018-08-11 07:59:47 --> Model Class Initialized
INFO - 2018-08-11 07:59:47 --> Controller Class Initialized
DEBUG - 2018-08-11 07:59:47 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 07:59:47 --> Email Class Initialized
INFO - 2018-08-11 07:59:47 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 07:59:47 --> Helper loaded: cookie_helper
INFO - 2018-08-11 07:59:47 --> Helper loaded: language_helper
INFO - 2018-08-11 07:59:47 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 07:59:47 --> Model Class Initialized
INFO - 2018-08-11 07:59:47 --> Helper loaded: date_helper
INFO - 2018-08-11 12:59:47 --> Form Validation Class Initialized
INFO - 2018-08-11 12:59:47 --> Model Class Initialized
DEBUG - 2018-08-11 12:59:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 12:59:47 --> Model Class Initialized
DEBUG - 2018-08-11 12:59:47 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 12:59:47 --> Model Class Initialized
INFO - 2018-08-11 12:59:47 --> Model Class Initialized
DEBUG - 2018-08-11 12:59:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 12:59:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 12:59:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 12:59:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 12:59:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 12:59:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 12:59:47 --> Final output sent to browser
DEBUG - 2018-08-11 12:59:47 --> Total execution time: 0.1746
INFO - 2018-08-11 08:12:49 --> Config Class Initialized
INFO - 2018-08-11 08:12:49 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:12:49 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:12:49 --> Utf8 Class Initialized
INFO - 2018-08-11 08:12:49 --> URI Class Initialized
DEBUG - 2018-08-11 08:12:49 --> No URI present. Default controller set.
INFO - 2018-08-11 08:12:49 --> Router Class Initialized
INFO - 2018-08-11 08:12:49 --> Output Class Initialized
INFO - 2018-08-11 08:12:49 --> Security Class Initialized
DEBUG - 2018-08-11 08:12:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:12:49 --> Input Class Initialized
INFO - 2018-08-11 08:12:49 --> Language Class Initialized
INFO - 2018-08-11 08:12:49 --> Language Class Initialized
INFO - 2018-08-11 08:12:49 --> Config Class Initialized
INFO - 2018-08-11 08:12:49 --> Loader Class Initialized
INFO - 2018-08-11 08:12:49 --> Helper loaded: security_helper
INFO - 2018-08-11 08:12:49 --> Helper loaded: form_helper
INFO - 2018-08-11 08:12:49 --> Helper loaded: url_helper
INFO - 2018-08-11 08:12:49 --> Helper loaded: global_helper
INFO - 2018-08-11 08:12:49 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:12:49 --> Helper loaded: text_helper
INFO - 2018-08-11 08:12:49 --> Database Driver Class Initialized
INFO - 2018-08-11 08:12:49 --> Model Class Initialized
INFO - 2018-08-11 08:12:49 --> Controller Class Initialized
DEBUG - 2018-08-11 08:12:49 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:12:49 --> Email Class Initialized
INFO - 2018-08-11 08:12:49 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:12:49 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:12:49 --> Helper loaded: language_helper
INFO - 2018-08-11 08:12:49 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:12:49 --> Model Class Initialized
INFO - 2018-08-11 08:12:49 --> Helper loaded: date_helper
INFO - 2018-08-11 13:12:49 --> Model Class Initialized
INFO - 2018-08-11 13:12:49 --> Form Validation Class Initialized
DEBUG - 2018-08-11 13:12:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:12:49 --> Model Class Initialized
DEBUG - 2018-08-11 13:12:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:12:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/sections/search_section_home.php
DEBUG - 2018-08-11 13:12:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/lesson_count.php
DEBUG - 2018-08-11 13:12:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/index.php
DEBUG - 2018-08-11 13:12:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:12:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 13:12:50 --> Final output sent to browser
DEBUG - 2018-08-11 13:12:50 --> Total execution time: 0.5263
INFO - 2018-08-11 08:12:55 --> Config Class Initialized
INFO - 2018-08-11 08:12:55 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:12:55 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:12:55 --> Utf8 Class Initialized
INFO - 2018-08-11 08:12:55 --> URI Class Initialized
INFO - 2018-08-11 08:12:55 --> Router Class Initialized
INFO - 2018-08-11 08:12:55 --> Output Class Initialized
INFO - 2018-08-11 08:12:55 --> Security Class Initialized
DEBUG - 2018-08-11 08:12:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:12:55 --> Input Class Initialized
INFO - 2018-08-11 08:12:55 --> Language Class Initialized
INFO - 2018-08-11 08:12:55 --> Language Class Initialized
INFO - 2018-08-11 08:12:55 --> Config Class Initialized
INFO - 2018-08-11 08:12:55 --> Loader Class Initialized
INFO - 2018-08-11 08:12:55 --> Helper loaded: security_helper
INFO - 2018-08-11 08:12:55 --> Helper loaded: form_helper
INFO - 2018-08-11 08:12:55 --> Helper loaded: url_helper
INFO - 2018-08-11 08:12:55 --> Helper loaded: global_helper
INFO - 2018-08-11 08:12:55 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:12:55 --> Helper loaded: text_helper
INFO - 2018-08-11 08:12:55 --> Database Driver Class Initialized
INFO - 2018-08-11 08:12:55 --> Model Class Initialized
INFO - 2018-08-11 08:12:55 --> Controller Class Initialized
DEBUG - 2018-08-11 08:12:55 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:12:55 --> Email Class Initialized
INFO - 2018-08-11 08:12:55 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:12:55 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:12:55 --> Helper loaded: language_helper
INFO - 2018-08-11 08:12:55 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:12:55 --> Model Class Initialized
INFO - 2018-08-11 08:12:55 --> Helper loaded: date_helper
INFO - 2018-08-11 13:12:55 --> Model Class Initialized
INFO - 2018-08-11 13:12:55 --> Form Validation Class Initialized
DEBUG - 2018-08-11 13:12:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:12:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/sections/student_leads_list_section.php
DEBUG - 2018-08-11 13:12:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:12:55 --> Model Class Initialized
DEBUG - 2018-08-11 13:12:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/search_student_leads.php
DEBUG - 2018-08-11 13:12:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:12:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 13:12:55 --> Final output sent to browser
DEBUG - 2018-08-11 13:12:55 --> Total execution time: 0.3852
INFO - 2018-08-11 08:13:00 --> Config Class Initialized
INFO - 2018-08-11 08:13:00 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:13:00 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:13:00 --> Utf8 Class Initialized
INFO - 2018-08-11 08:13:00 --> URI Class Initialized
INFO - 2018-08-11 08:13:00 --> Router Class Initialized
INFO - 2018-08-11 08:13:00 --> Output Class Initialized
INFO - 2018-08-11 08:13:00 --> Security Class Initialized
DEBUG - 2018-08-11 08:13:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:13:00 --> Input Class Initialized
INFO - 2018-08-11 08:13:00 --> Language Class Initialized
INFO - 2018-08-11 08:13:00 --> Language Class Initialized
INFO - 2018-08-11 08:13:00 --> Config Class Initialized
INFO - 2018-08-11 08:13:00 --> Loader Class Initialized
INFO - 2018-08-11 08:13:00 --> Helper loaded: security_helper
INFO - 2018-08-11 08:13:00 --> Helper loaded: form_helper
INFO - 2018-08-11 08:13:00 --> Helper loaded: url_helper
INFO - 2018-08-11 08:13:00 --> Helper loaded: global_helper
INFO - 2018-08-11 08:13:00 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:13:00 --> Helper loaded: text_helper
INFO - 2018-08-11 08:13:00 --> Database Driver Class Initialized
INFO - 2018-08-11 08:13:00 --> Model Class Initialized
INFO - 2018-08-11 08:13:00 --> Controller Class Initialized
DEBUG - 2018-08-11 08:13:00 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:13:00 --> Email Class Initialized
INFO - 2018-08-11 08:13:00 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:13:00 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:13:00 --> Helper loaded: language_helper
INFO - 2018-08-11 08:13:00 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:13:00 --> Model Class Initialized
INFO - 2018-08-11 08:13:00 --> Helper loaded: date_helper
INFO - 2018-08-11 13:13:00 --> Model Class Initialized
INFO - 2018-08-11 13:13:00 --> Form Validation Class Initialized
DEBUG - 2018-08-11 13:13:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:13:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 13:13:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/sections/selling_course_section.php
DEBUG - 2018-08-11 13:13:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/selling_courses.php
DEBUG - 2018-08-11 13:13:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:13:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 13:13:00 --> Final output sent to browser
DEBUG - 2018-08-11 13:13:00 --> Total execution time: 0.1260
INFO - 2018-08-11 08:13:08 --> Config Class Initialized
INFO - 2018-08-11 08:13:08 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:13:08 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:13:08 --> Utf8 Class Initialized
INFO - 2018-08-11 08:13:08 --> URI Class Initialized
INFO - 2018-08-11 08:13:08 --> Router Class Initialized
INFO - 2018-08-11 08:13:08 --> Output Class Initialized
INFO - 2018-08-11 08:13:08 --> Security Class Initialized
DEBUG - 2018-08-11 08:13:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:13:08 --> Input Class Initialized
INFO - 2018-08-11 08:13:08 --> Language Class Initialized
INFO - 2018-08-11 08:13:08 --> Language Class Initialized
INFO - 2018-08-11 08:13:08 --> Config Class Initialized
INFO - 2018-08-11 08:13:08 --> Loader Class Initialized
INFO - 2018-08-11 08:13:08 --> Helper loaded: security_helper
INFO - 2018-08-11 08:13:08 --> Helper loaded: form_helper
INFO - 2018-08-11 08:13:08 --> Helper loaded: url_helper
INFO - 2018-08-11 08:13:08 --> Helper loaded: global_helper
INFO - 2018-08-11 08:13:08 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:13:08 --> Helper loaded: text_helper
INFO - 2018-08-11 08:13:08 --> Database Driver Class Initialized
INFO - 2018-08-11 08:13:08 --> Model Class Initialized
INFO - 2018-08-11 08:13:08 --> Controller Class Initialized
DEBUG - 2018-08-11 08:13:08 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:13:08 --> Email Class Initialized
INFO - 2018-08-11 08:13:08 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:13:08 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:13:08 --> Helper loaded: language_helper
INFO - 2018-08-11 08:13:08 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:13:08 --> Model Class Initialized
INFO - 2018-08-11 08:13:08 --> Helper loaded: date_helper
INFO - 2018-08-11 13:13:08 --> Model Class Initialized
INFO - 2018-08-11 13:13:08 --> Form Validation Class Initialized
DEBUG - 2018-08-11 13:13:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:13:08 --> Model Class Initialized
ERROR - 2018-08-11 13:13:08 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 13:13:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 13:13:08 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 08:13:10 --> Config Class Initialized
INFO - 2018-08-11 08:13:10 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:13:10 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:13:10 --> Utf8 Class Initialized
INFO - 2018-08-11 08:13:10 --> URI Class Initialized
INFO - 2018-08-11 08:13:10 --> Router Class Initialized
INFO - 2018-08-11 08:13:10 --> Output Class Initialized
INFO - 2018-08-11 08:13:10 --> Security Class Initialized
DEBUG - 2018-08-11 08:13:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:13:10 --> Input Class Initialized
INFO - 2018-08-11 08:13:10 --> Language Class Initialized
INFO - 2018-08-11 08:13:10 --> Language Class Initialized
INFO - 2018-08-11 08:13:10 --> Config Class Initialized
INFO - 2018-08-11 08:13:10 --> Loader Class Initialized
INFO - 2018-08-11 08:13:10 --> Helper loaded: security_helper
INFO - 2018-08-11 08:13:10 --> Helper loaded: form_helper
INFO - 2018-08-11 08:13:10 --> Helper loaded: url_helper
INFO - 2018-08-11 08:13:10 --> Helper loaded: global_helper
INFO - 2018-08-11 08:13:10 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:13:10 --> Helper loaded: text_helper
INFO - 2018-08-11 08:13:10 --> Database Driver Class Initialized
INFO - 2018-08-11 08:13:10 --> Model Class Initialized
INFO - 2018-08-11 08:13:10 --> Controller Class Initialized
DEBUG - 2018-08-11 08:13:10 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:13:10 --> Email Class Initialized
INFO - 2018-08-11 08:13:10 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:13:10 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:13:10 --> Helper loaded: language_helper
INFO - 2018-08-11 08:13:10 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:13:10 --> Model Class Initialized
INFO - 2018-08-11 08:13:10 --> Helper loaded: date_helper
INFO - 2018-08-11 13:13:10 --> Model Class Initialized
INFO - 2018-08-11 13:13:10 --> Form Validation Class Initialized
DEBUG - 2018-08-11 13:13:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:13:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 13:13:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/sections/selling_course_section.php
DEBUG - 2018-08-11 13:13:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/selling_courses.php
DEBUG - 2018-08-11 13:13:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:13:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 13:13:11 --> Final output sent to browser
DEBUG - 2018-08-11 13:13:11 --> Total execution time: 0.1743
INFO - 2018-08-11 08:13:32 --> Config Class Initialized
INFO - 2018-08-11 08:13:32 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:13:32 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:13:32 --> Utf8 Class Initialized
INFO - 2018-08-11 08:13:32 --> URI Class Initialized
INFO - 2018-08-11 08:13:32 --> Router Class Initialized
INFO - 2018-08-11 08:13:32 --> Output Class Initialized
INFO - 2018-08-11 08:13:32 --> Security Class Initialized
DEBUG - 2018-08-11 08:13:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:13:32 --> Input Class Initialized
INFO - 2018-08-11 08:13:32 --> Language Class Initialized
INFO - 2018-08-11 08:13:32 --> Language Class Initialized
INFO - 2018-08-11 08:13:32 --> Config Class Initialized
INFO - 2018-08-11 08:13:32 --> Loader Class Initialized
INFO - 2018-08-11 08:13:32 --> Helper loaded: security_helper
INFO - 2018-08-11 08:13:32 --> Helper loaded: form_helper
INFO - 2018-08-11 08:13:32 --> Helper loaded: url_helper
INFO - 2018-08-11 08:13:32 --> Helper loaded: global_helper
INFO - 2018-08-11 08:13:32 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:13:32 --> Helper loaded: text_helper
INFO - 2018-08-11 08:13:32 --> Database Driver Class Initialized
INFO - 2018-08-11 08:13:32 --> Model Class Initialized
INFO - 2018-08-11 08:13:32 --> Controller Class Initialized
DEBUG - 2018-08-11 08:13:32 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:13:32 --> Email Class Initialized
INFO - 2018-08-11 08:13:32 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:13:32 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:13:32 --> Helper loaded: language_helper
INFO - 2018-08-11 08:13:32 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:13:32 --> Model Class Initialized
INFO - 2018-08-11 08:13:32 --> Helper loaded: date_helper
INFO - 2018-08-11 13:13:32 --> Form Validation Class Initialized
INFO - 2018-08-11 13:13:32 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 13:13:32 --> Model Class Initialized
DEBUG - 2018-08-11 13:13:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:13:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/auth/views/login.php
DEBUG - 2018-08-11 13:13:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:13:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 13:13:32 --> Final output sent to browser
DEBUG - 2018-08-11 13:13:32 --> Total execution time: 0.1458
INFO - 2018-08-11 08:13:37 --> Config Class Initialized
INFO - 2018-08-11 08:13:37 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:13:37 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:13:37 --> Utf8 Class Initialized
INFO - 2018-08-11 08:13:37 --> URI Class Initialized
INFO - 2018-08-11 08:13:37 --> Router Class Initialized
INFO - 2018-08-11 08:13:37 --> Output Class Initialized
INFO - 2018-08-11 08:13:37 --> Security Class Initialized
DEBUG - 2018-08-11 08:13:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:13:37 --> Input Class Initialized
INFO - 2018-08-11 08:13:37 --> Language Class Initialized
INFO - 2018-08-11 08:13:37 --> Language Class Initialized
INFO - 2018-08-11 08:13:37 --> Config Class Initialized
INFO - 2018-08-11 08:13:37 --> Loader Class Initialized
INFO - 2018-08-11 08:13:37 --> Helper loaded: security_helper
INFO - 2018-08-11 08:13:37 --> Helper loaded: form_helper
INFO - 2018-08-11 08:13:37 --> Helper loaded: url_helper
INFO - 2018-08-11 08:13:37 --> Helper loaded: global_helper
INFO - 2018-08-11 08:13:37 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:13:37 --> Helper loaded: text_helper
INFO - 2018-08-11 08:13:37 --> Database Driver Class Initialized
INFO - 2018-08-11 08:13:37 --> Model Class Initialized
INFO - 2018-08-11 08:13:37 --> Controller Class Initialized
DEBUG - 2018-08-11 08:13:37 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:13:37 --> Email Class Initialized
INFO - 2018-08-11 08:13:37 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:13:37 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:13:37 --> Helper loaded: language_helper
INFO - 2018-08-11 08:13:37 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:13:37 --> Model Class Initialized
INFO - 2018-08-11 08:13:37 --> Helper loaded: date_helper
INFO - 2018-08-11 13:13:37 --> Form Validation Class Initialized
INFO - 2018-08-11 13:13:37 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 13:13:37 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2018-08-11 08:13:37 --> Config Class Initialized
INFO - 2018-08-11 08:13:37 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:13:37 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:13:37 --> Utf8 Class Initialized
INFO - 2018-08-11 08:13:37 --> URI Class Initialized
INFO - 2018-08-11 08:13:38 --> Router Class Initialized
INFO - 2018-08-11 08:13:38 --> Output Class Initialized
INFO - 2018-08-11 08:13:38 --> Security Class Initialized
DEBUG - 2018-08-11 08:13:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:13:38 --> Input Class Initialized
INFO - 2018-08-11 08:13:38 --> Language Class Initialized
INFO - 2018-08-11 08:13:38 --> Language Class Initialized
INFO - 2018-08-11 08:13:38 --> Config Class Initialized
INFO - 2018-08-11 08:13:38 --> Loader Class Initialized
INFO - 2018-08-11 08:13:38 --> Helper loaded: security_helper
INFO - 2018-08-11 08:13:38 --> Helper loaded: form_helper
INFO - 2018-08-11 08:13:38 --> Helper loaded: url_helper
INFO - 2018-08-11 08:13:38 --> Helper loaded: global_helper
INFO - 2018-08-11 08:13:38 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:13:38 --> Helper loaded: text_helper
INFO - 2018-08-11 08:13:38 --> Database Driver Class Initialized
INFO - 2018-08-11 08:13:38 --> Model Class Initialized
INFO - 2018-08-11 08:13:38 --> Controller Class Initialized
DEBUG - 2018-08-11 08:13:38 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:13:38 --> Email Class Initialized
INFO - 2018-08-11 08:13:38 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:13:38 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:13:38 --> Helper loaded: language_helper
INFO - 2018-08-11 08:13:38 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:13:38 --> Model Class Initialized
INFO - 2018-08-11 08:13:38 --> Helper loaded: date_helper
INFO - 2018-08-11 13:13:38 --> Form Validation Class Initialized
INFO - 2018-08-11 13:13:38 --> Model Class Initialized
DEBUG - 2018-08-11 13:13:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 13:13:38 --> Model Class Initialized
DEBUG - 2018-08-11 13:13:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:13:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 13:13:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:13:38 --> Model Class Initialized
DEBUG - 2018-08-11 13:13:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 13:13:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 13:13:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 13:13:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:13:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 13:13:38 --> Final output sent to browser
DEBUG - 2018-08-11 13:13:38 --> Total execution time: 0.1692
INFO - 2018-08-11 08:13:48 --> Config Class Initialized
INFO - 2018-08-11 08:13:48 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:13:48 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:13:48 --> Utf8 Class Initialized
INFO - 2018-08-11 08:13:48 --> URI Class Initialized
INFO - 2018-08-11 08:13:48 --> Router Class Initialized
INFO - 2018-08-11 08:13:48 --> Output Class Initialized
INFO - 2018-08-11 08:13:48 --> Security Class Initialized
DEBUG - 2018-08-11 08:13:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:13:48 --> Input Class Initialized
INFO - 2018-08-11 08:13:48 --> Language Class Initialized
INFO - 2018-08-11 08:13:48 --> Language Class Initialized
INFO - 2018-08-11 08:13:48 --> Config Class Initialized
INFO - 2018-08-11 08:13:48 --> Loader Class Initialized
INFO - 2018-08-11 08:13:48 --> Helper loaded: security_helper
INFO - 2018-08-11 08:13:48 --> Helper loaded: form_helper
INFO - 2018-08-11 08:13:48 --> Helper loaded: url_helper
INFO - 2018-08-11 08:13:48 --> Helper loaded: global_helper
INFO - 2018-08-11 08:13:48 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:13:48 --> Helper loaded: text_helper
INFO - 2018-08-11 08:13:48 --> Database Driver Class Initialized
INFO - 2018-08-11 08:13:48 --> Model Class Initialized
INFO - 2018-08-11 08:13:48 --> Controller Class Initialized
DEBUG - 2018-08-11 08:13:48 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:13:48 --> Email Class Initialized
INFO - 2018-08-11 08:13:48 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:13:48 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:13:48 --> Helper loaded: language_helper
INFO - 2018-08-11 08:13:48 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:13:48 --> Model Class Initialized
INFO - 2018-08-11 08:13:48 --> Helper loaded: date_helper
INFO - 2018-08-11 13:13:48 --> Form Validation Class Initialized
INFO - 2018-08-11 13:13:48 --> Model Class Initialized
DEBUG - 2018-08-11 13:13:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 13:13:48 --> Model Class Initialized
DEBUG - 2018-08-11 13:13:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:13:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 13:13:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:13:48 --> Model Class Initialized
DEBUG - 2018-08-11 13:13:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 13:13:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 13:13:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/list_packages.php
DEBUG - 2018-08-11 13:13:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:13:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 13:13:49 --> Final output sent to browser
DEBUG - 2018-08-11 13:13:49 --> Total execution time: 0.2383
INFO - 2018-08-11 08:14:43 --> Config Class Initialized
INFO - 2018-08-11 08:14:43 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:14:43 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:14:43 --> Utf8 Class Initialized
INFO - 2018-08-11 08:14:43 --> URI Class Initialized
INFO - 2018-08-11 08:14:43 --> Router Class Initialized
INFO - 2018-08-11 08:14:43 --> Output Class Initialized
INFO - 2018-08-11 08:14:43 --> Security Class Initialized
DEBUG - 2018-08-11 08:14:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:14:43 --> Input Class Initialized
INFO - 2018-08-11 08:14:43 --> Language Class Initialized
INFO - 2018-08-11 08:14:43 --> Language Class Initialized
INFO - 2018-08-11 08:14:43 --> Config Class Initialized
INFO - 2018-08-11 08:14:43 --> Loader Class Initialized
INFO - 2018-08-11 08:14:43 --> Helper loaded: security_helper
INFO - 2018-08-11 08:14:43 --> Helper loaded: form_helper
INFO - 2018-08-11 08:14:43 --> Helper loaded: url_helper
INFO - 2018-08-11 08:14:43 --> Helper loaded: global_helper
INFO - 2018-08-11 08:14:43 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:14:43 --> Helper loaded: text_helper
INFO - 2018-08-11 08:14:43 --> Database Driver Class Initialized
INFO - 2018-08-11 08:14:43 --> Model Class Initialized
INFO - 2018-08-11 08:14:43 --> Controller Class Initialized
DEBUG - 2018-08-11 08:14:43 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:14:43 --> Email Class Initialized
INFO - 2018-08-11 08:14:43 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:14:43 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:14:43 --> Helper loaded: language_helper
INFO - 2018-08-11 08:14:43 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:14:43 --> Model Class Initialized
INFO - 2018-08-11 08:14:43 --> Helper loaded: date_helper
INFO - 2018-08-11 13:14:43 --> Model Class Initialized
INFO - 2018-08-11 13:14:43 --> Form Validation Class Initialized
DEBUG - 2018-08-11 13:14:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:14:43 --> Model Class Initialized
ERROR - 2018-08-11 13:14:44 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 13:14:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 13:14:44 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 08:14:58 --> Config Class Initialized
INFO - 2018-08-11 08:14:58 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:14:58 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:14:58 --> Utf8 Class Initialized
INFO - 2018-08-11 08:14:58 --> URI Class Initialized
INFO - 2018-08-11 08:14:58 --> Router Class Initialized
INFO - 2018-08-11 08:14:58 --> Output Class Initialized
INFO - 2018-08-11 08:14:58 --> Security Class Initialized
DEBUG - 2018-08-11 08:14:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:14:58 --> Input Class Initialized
INFO - 2018-08-11 08:14:58 --> Language Class Initialized
INFO - 2018-08-11 08:14:58 --> Language Class Initialized
INFO - 2018-08-11 08:14:58 --> Config Class Initialized
INFO - 2018-08-11 08:14:58 --> Loader Class Initialized
INFO - 2018-08-11 08:14:58 --> Helper loaded: security_helper
INFO - 2018-08-11 08:14:58 --> Helper loaded: form_helper
INFO - 2018-08-11 08:14:58 --> Helper loaded: url_helper
INFO - 2018-08-11 08:14:58 --> Helper loaded: global_helper
INFO - 2018-08-11 08:14:58 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:14:58 --> Helper loaded: text_helper
INFO - 2018-08-11 08:14:58 --> Database Driver Class Initialized
INFO - 2018-08-11 08:14:58 --> Model Class Initialized
INFO - 2018-08-11 08:14:58 --> Controller Class Initialized
DEBUG - 2018-08-11 08:14:58 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:14:58 --> Email Class Initialized
INFO - 2018-08-11 08:14:58 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:14:58 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:14:58 --> Helper loaded: language_helper
INFO - 2018-08-11 08:14:58 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:14:58 --> Model Class Initialized
INFO - 2018-08-11 08:14:58 --> Helper loaded: date_helper
INFO - 2018-08-11 13:14:58 --> Form Validation Class Initialized
INFO - 2018-08-11 13:14:58 --> Model Class Initialized
DEBUG - 2018-08-11 13:14:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 13:14:58 --> Model Class Initialized
DEBUG - 2018-08-11 13:14:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:14:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 13:14:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:14:58 --> Model Class Initialized
DEBUG - 2018-08-11 13:14:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 13:14:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 13:14:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/list_packages.php
DEBUG - 2018-08-11 13:14:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:14:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 13:14:58 --> Final output sent to browser
DEBUG - 2018-08-11 13:14:58 --> Total execution time: 0.1785
INFO - 2018-08-11 08:15:23 --> Config Class Initialized
INFO - 2018-08-11 08:15:23 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:15:23 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:15:23 --> Utf8 Class Initialized
INFO - 2018-08-11 08:15:23 --> URI Class Initialized
INFO - 2018-08-11 08:15:23 --> Router Class Initialized
INFO - 2018-08-11 08:15:23 --> Output Class Initialized
INFO - 2018-08-11 08:15:23 --> Security Class Initialized
DEBUG - 2018-08-11 08:15:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:15:23 --> Input Class Initialized
INFO - 2018-08-11 08:15:23 --> Language Class Initialized
INFO - 2018-08-11 08:15:23 --> Language Class Initialized
INFO - 2018-08-11 08:15:23 --> Config Class Initialized
INFO - 2018-08-11 08:15:23 --> Loader Class Initialized
INFO - 2018-08-11 08:15:23 --> Helper loaded: security_helper
INFO - 2018-08-11 08:15:23 --> Helper loaded: form_helper
INFO - 2018-08-11 08:15:23 --> Helper loaded: url_helper
INFO - 2018-08-11 08:15:23 --> Helper loaded: global_helper
INFO - 2018-08-11 08:15:23 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:15:23 --> Helper loaded: text_helper
INFO - 2018-08-11 08:15:23 --> Database Driver Class Initialized
INFO - 2018-08-11 08:15:23 --> Model Class Initialized
INFO - 2018-08-11 08:15:23 --> Controller Class Initialized
DEBUG - 2018-08-11 08:15:23 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:15:23 --> Email Class Initialized
INFO - 2018-08-11 08:15:23 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:15:23 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:15:23 --> Helper loaded: language_helper
INFO - 2018-08-11 08:15:23 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:15:23 --> Model Class Initialized
INFO - 2018-08-11 08:15:23 --> Helper loaded: date_helper
INFO - 2018-08-11 13:15:23 --> Model Class Initialized
INFO - 2018-08-11 13:15:23 --> Form Validation Class Initialized
DEBUG - 2018-08-11 13:15:23 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:15:23 --> Model Class Initialized
ERROR - 2018-08-11 13:15:23 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 13:15:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 13:15:23 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 08:16:00 --> Config Class Initialized
INFO - 2018-08-11 08:16:00 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:16:00 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:16:00 --> Utf8 Class Initialized
INFO - 2018-08-11 08:16:00 --> URI Class Initialized
INFO - 2018-08-11 08:16:00 --> Router Class Initialized
INFO - 2018-08-11 08:16:00 --> Output Class Initialized
INFO - 2018-08-11 08:16:00 --> Security Class Initialized
DEBUG - 2018-08-11 08:16:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:16:00 --> Input Class Initialized
INFO - 2018-08-11 08:16:00 --> Language Class Initialized
INFO - 2018-08-11 08:16:00 --> Language Class Initialized
INFO - 2018-08-11 08:16:00 --> Config Class Initialized
INFO - 2018-08-11 08:16:00 --> Loader Class Initialized
INFO - 2018-08-11 08:16:00 --> Helper loaded: security_helper
INFO - 2018-08-11 08:16:00 --> Helper loaded: form_helper
INFO - 2018-08-11 08:16:00 --> Helper loaded: url_helper
INFO - 2018-08-11 08:16:00 --> Helper loaded: global_helper
INFO - 2018-08-11 08:16:00 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:16:00 --> Helper loaded: text_helper
INFO - 2018-08-11 08:16:00 --> Database Driver Class Initialized
INFO - 2018-08-11 08:16:00 --> Model Class Initialized
INFO - 2018-08-11 08:16:00 --> Controller Class Initialized
DEBUG - 2018-08-11 08:16:00 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:16:00 --> Email Class Initialized
INFO - 2018-08-11 08:16:00 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:16:00 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:16:00 --> Helper loaded: language_helper
INFO - 2018-08-11 08:16:00 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:16:00 --> Model Class Initialized
INFO - 2018-08-11 08:16:00 --> Helper loaded: date_helper
INFO - 2018-08-11 13:16:00 --> Model Class Initialized
INFO - 2018-08-11 13:16:00 --> Form Validation Class Initialized
DEBUG - 2018-08-11 13:16:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:16:00 --> Model Class Initialized
ERROR - 2018-08-11 13:16:00 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 13:16:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 13:16:00 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 08:19:24 --> Config Class Initialized
INFO - 2018-08-11 08:19:24 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:19:24 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:19:24 --> Utf8 Class Initialized
INFO - 2018-08-11 08:19:24 --> URI Class Initialized
INFO - 2018-08-11 08:19:24 --> Router Class Initialized
INFO - 2018-08-11 08:19:24 --> Output Class Initialized
INFO - 2018-08-11 08:19:24 --> Security Class Initialized
DEBUG - 2018-08-11 08:19:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:19:24 --> Input Class Initialized
INFO - 2018-08-11 08:19:24 --> Language Class Initialized
INFO - 2018-08-11 08:19:24 --> Language Class Initialized
INFO - 2018-08-11 08:19:24 --> Config Class Initialized
INFO - 2018-08-11 08:19:24 --> Loader Class Initialized
INFO - 2018-08-11 08:19:24 --> Helper loaded: security_helper
INFO - 2018-08-11 08:19:24 --> Helper loaded: form_helper
INFO - 2018-08-11 08:19:24 --> Helper loaded: url_helper
INFO - 2018-08-11 08:19:24 --> Helper loaded: global_helper
INFO - 2018-08-11 08:19:24 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:19:24 --> Helper loaded: text_helper
INFO - 2018-08-11 08:19:24 --> Database Driver Class Initialized
INFO - 2018-08-11 08:19:25 --> Model Class Initialized
INFO - 2018-08-11 08:19:25 --> Controller Class Initialized
DEBUG - 2018-08-11 08:19:25 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:19:25 --> Email Class Initialized
INFO - 2018-08-11 08:19:25 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:19:25 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:19:25 --> Helper loaded: language_helper
INFO - 2018-08-11 08:19:25 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:19:25 --> Model Class Initialized
INFO - 2018-08-11 08:19:25 --> Helper loaded: date_helper
INFO - 2018-08-11 13:19:25 --> Form Validation Class Initialized
INFO - 2018-08-11 13:19:25 --> Model Class Initialized
DEBUG - 2018-08-11 13:19:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 13:19:25 --> Model Class Initialized
DEBUG - 2018-08-11 13:19:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:19:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 13:19:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:19:25 --> Model Class Initialized
DEBUG - 2018-08-11 13:19:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 13:19:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 13:19:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 13:19:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:19:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 13:19:25 --> Final output sent to browser
DEBUG - 2018-08-11 13:19:25 --> Total execution time: 0.2612
INFO - 2018-08-11 08:19:34 --> Config Class Initialized
INFO - 2018-08-11 08:19:34 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:19:34 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:19:34 --> Utf8 Class Initialized
INFO - 2018-08-11 08:19:34 --> URI Class Initialized
INFO - 2018-08-11 08:19:34 --> Router Class Initialized
INFO - 2018-08-11 08:19:34 --> Output Class Initialized
INFO - 2018-08-11 08:19:34 --> Security Class Initialized
DEBUG - 2018-08-11 08:19:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:19:34 --> Input Class Initialized
INFO - 2018-08-11 08:19:34 --> Language Class Initialized
INFO - 2018-08-11 08:19:34 --> Language Class Initialized
INFO - 2018-08-11 08:19:34 --> Config Class Initialized
INFO - 2018-08-11 08:19:34 --> Loader Class Initialized
INFO - 2018-08-11 08:19:34 --> Helper loaded: security_helper
INFO - 2018-08-11 08:19:34 --> Helper loaded: form_helper
INFO - 2018-08-11 08:19:34 --> Helper loaded: url_helper
INFO - 2018-08-11 08:19:34 --> Helper loaded: global_helper
INFO - 2018-08-11 08:19:34 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:19:34 --> Helper loaded: text_helper
INFO - 2018-08-11 08:19:34 --> Database Driver Class Initialized
INFO - 2018-08-11 08:19:34 --> Model Class Initialized
INFO - 2018-08-11 08:19:34 --> Controller Class Initialized
DEBUG - 2018-08-11 08:19:34 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:19:34 --> Email Class Initialized
INFO - 2018-08-11 08:19:34 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:19:34 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:19:34 --> Helper loaded: language_helper
INFO - 2018-08-11 08:19:34 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:19:34 --> Model Class Initialized
INFO - 2018-08-11 08:19:34 --> Helper loaded: date_helper
INFO - 2018-08-11 13:19:34 --> Form Validation Class Initialized
INFO - 2018-08-11 13:19:34 --> Model Class Initialized
DEBUG - 2018-08-11 13:19:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 13:19:34 --> Model Class Initialized
DEBUG - 2018-08-11 13:19:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:19:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 13:19:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:19:34 --> Model Class Initialized
DEBUG - 2018-08-11 13:19:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 13:19:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 13:19:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/list_packages.php
DEBUG - 2018-08-11 13:19:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:19:34 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 13:19:34 --> Final output sent to browser
DEBUG - 2018-08-11 13:19:34 --> Total execution time: 0.1612
INFO - 2018-08-11 08:29:52 --> Config Class Initialized
INFO - 2018-08-11 08:29:52 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:29:52 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:29:52 --> Utf8 Class Initialized
INFO - 2018-08-11 08:29:52 --> URI Class Initialized
INFO - 2018-08-11 08:29:52 --> Router Class Initialized
INFO - 2018-08-11 08:29:52 --> Output Class Initialized
INFO - 2018-08-11 08:29:52 --> Security Class Initialized
DEBUG - 2018-08-11 08:29:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:29:52 --> Input Class Initialized
INFO - 2018-08-11 08:29:52 --> Language Class Initialized
INFO - 2018-08-11 08:29:52 --> Language Class Initialized
INFO - 2018-08-11 08:29:52 --> Config Class Initialized
INFO - 2018-08-11 08:29:52 --> Loader Class Initialized
INFO - 2018-08-11 08:29:52 --> Helper loaded: security_helper
INFO - 2018-08-11 08:29:52 --> Helper loaded: form_helper
INFO - 2018-08-11 08:29:52 --> Helper loaded: url_helper
INFO - 2018-08-11 08:29:52 --> Helper loaded: global_helper
INFO - 2018-08-11 08:29:52 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:29:52 --> Helper loaded: text_helper
INFO - 2018-08-11 08:29:52 --> Database Driver Class Initialized
INFO - 2018-08-11 08:29:52 --> Model Class Initialized
INFO - 2018-08-11 08:29:52 --> Controller Class Initialized
DEBUG - 2018-08-11 08:29:52 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:29:52 --> Email Class Initialized
INFO - 2018-08-11 08:29:52 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:29:52 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:29:52 --> Helper loaded: language_helper
INFO - 2018-08-11 08:29:52 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:29:52 --> Model Class Initialized
INFO - 2018-08-11 08:29:52 --> Helper loaded: date_helper
INFO - 2018-08-11 13:29:52 --> Form Validation Class Initialized
INFO - 2018-08-11 13:29:52 --> Model Class Initialized
DEBUG - 2018-08-11 13:29:52 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 13:29:52 --> Model Class Initialized
INFO - 2018-08-11 13:29:52 --> Model Class Initialized
DEBUG - 2018-08-11 13:29:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:29:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 13:29:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:29:52 --> Model Class Initialized
DEBUG - 2018-08-11 13:29:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 13:29:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 13:29:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:29:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 13:29:52 --> Final output sent to browser
DEBUG - 2018-08-11 13:29:52 --> Total execution time: 0.2389
INFO - 2018-08-11 08:38:39 --> Config Class Initialized
INFO - 2018-08-11 08:38:39 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:38:39 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:38:39 --> Utf8 Class Initialized
INFO - 2018-08-11 08:38:39 --> URI Class Initialized
DEBUG - 2018-08-11 08:38:39 --> No URI present. Default controller set.
INFO - 2018-08-11 08:38:39 --> Router Class Initialized
INFO - 2018-08-11 08:38:39 --> Output Class Initialized
INFO - 2018-08-11 08:38:39 --> Security Class Initialized
DEBUG - 2018-08-11 08:38:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:38:39 --> Input Class Initialized
INFO - 2018-08-11 08:38:39 --> Language Class Initialized
INFO - 2018-08-11 08:38:39 --> Language Class Initialized
INFO - 2018-08-11 08:38:39 --> Config Class Initialized
INFO - 2018-08-11 08:38:39 --> Loader Class Initialized
INFO - 2018-08-11 08:38:39 --> Helper loaded: security_helper
INFO - 2018-08-11 08:38:39 --> Helper loaded: form_helper
INFO - 2018-08-11 08:38:39 --> Helper loaded: url_helper
INFO - 2018-08-11 08:38:39 --> Helper loaded: global_helper
INFO - 2018-08-11 08:38:39 --> Helper loaded: inflector_helper
INFO - 2018-08-11 08:38:39 --> Helper loaded: text_helper
INFO - 2018-08-11 08:38:39 --> Database Driver Class Initialized
INFO - 2018-08-11 08:38:39 --> Model Class Initialized
INFO - 2018-08-11 08:38:39 --> Controller Class Initialized
DEBUG - 2018-08-11 08:38:39 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 08:38:39 --> Email Class Initialized
INFO - 2018-08-11 08:38:39 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 08:38:39 --> Helper loaded: cookie_helper
INFO - 2018-08-11 08:38:39 --> Helper loaded: language_helper
INFO - 2018-08-11 08:38:39 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 08:38:39 --> Model Class Initialized
INFO - 2018-08-11 08:38:39 --> Helper loaded: date_helper
INFO - 2018-08-11 13:38:39 --> Model Class Initialized
INFO - 2018-08-11 13:38:39 --> Form Validation Class Initialized
DEBUG - 2018-08-11 13:38:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 13:38:39 --> Model Class Initialized
DEBUG - 2018-08-11 13:38:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 13:38:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/sections/search_section_home.php
DEBUG - 2018-08-11 13:38:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/lesson_count.php
DEBUG - 2018-08-11 13:38:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/index.php
DEBUG - 2018-08-11 13:38:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 13:38:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 13:38:39 --> Final output sent to browser
DEBUG - 2018-08-11 13:38:39 --> Total execution time: 0.5937
INFO - 2018-08-11 08:38:45 --> Config Class Initialized
INFO - 2018-08-11 08:38:45 --> Hooks Class Initialized
DEBUG - 2018-08-11 08:38:45 --> UTF-8 Support Enabled
INFO - 2018-08-11 08:38:45 --> Utf8 Class Initialized
INFO - 2018-08-11 08:38:45 --> URI Class Initialized
INFO - 2018-08-11 08:38:45 --> Router Class Initialized
INFO - 2018-08-11 08:38:45 --> Output Class Initialized
INFO - 2018-08-11 08:38:45 --> Security Class Initialized
DEBUG - 2018-08-11 08:38:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 08:38:45 --> Input Class Initialized
INFO - 2018-08-11 08:38:45 --> Language Class Initialized
ERROR - 2018-08-11 08:38:45 --> 404 Page Not Found: /index
INFO - 2018-08-11 09:30:08 --> Config Class Initialized
INFO - 2018-08-11 09:30:08 --> Hooks Class Initialized
DEBUG - 2018-08-11 09:30:08 --> UTF-8 Support Enabled
INFO - 2018-08-11 09:30:08 --> Utf8 Class Initialized
INFO - 2018-08-11 09:30:08 --> URI Class Initialized
INFO - 2018-08-11 09:30:08 --> Router Class Initialized
INFO - 2018-08-11 09:30:08 --> Output Class Initialized
INFO - 2018-08-11 09:30:08 --> Security Class Initialized
DEBUG - 2018-08-11 09:30:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 09:30:08 --> Input Class Initialized
INFO - 2018-08-11 09:30:08 --> Language Class Initialized
INFO - 2018-08-11 09:30:08 --> Language Class Initialized
INFO - 2018-08-11 09:30:08 --> Config Class Initialized
INFO - 2018-08-11 09:30:08 --> Loader Class Initialized
INFO - 2018-08-11 09:30:08 --> Helper loaded: security_helper
INFO - 2018-08-11 09:30:08 --> Helper loaded: form_helper
INFO - 2018-08-11 09:30:08 --> Helper loaded: url_helper
INFO - 2018-08-11 09:30:08 --> Helper loaded: global_helper
INFO - 2018-08-11 09:30:08 --> Helper loaded: inflector_helper
INFO - 2018-08-11 09:30:08 --> Helper loaded: text_helper
INFO - 2018-08-11 09:30:08 --> Database Driver Class Initialized
INFO - 2018-08-11 09:30:08 --> Model Class Initialized
INFO - 2018-08-11 09:30:08 --> Controller Class Initialized
DEBUG - 2018-08-11 09:30:08 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 09:30:08 --> Email Class Initialized
INFO - 2018-08-11 09:30:08 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 09:30:08 --> Helper loaded: cookie_helper
INFO - 2018-08-11 09:30:08 --> Helper loaded: language_helper
INFO - 2018-08-11 09:30:08 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 09:30:08 --> Model Class Initialized
INFO - 2018-08-11 09:30:08 --> Helper loaded: date_helper
INFO - 2018-08-11 14:30:08 --> Model Class Initialized
INFO - 2018-08-11 14:30:08 --> Form Validation Class Initialized
DEBUG - 2018-08-11 14:30:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 14:30:08 --> Model Class Initialized
ERROR - 2018-08-11 14:30:09 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 14:30:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 14:30:09 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 09:30:13 --> Config Class Initialized
INFO - 2018-08-11 09:30:13 --> Hooks Class Initialized
DEBUG - 2018-08-11 09:30:13 --> UTF-8 Support Enabled
INFO - 2018-08-11 09:30:13 --> Utf8 Class Initialized
INFO - 2018-08-11 09:30:13 --> URI Class Initialized
DEBUG - 2018-08-11 09:30:13 --> No URI present. Default controller set.
INFO - 2018-08-11 09:30:13 --> Router Class Initialized
INFO - 2018-08-11 09:30:13 --> Output Class Initialized
INFO - 2018-08-11 09:30:13 --> Security Class Initialized
DEBUG - 2018-08-11 09:30:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 09:30:13 --> Input Class Initialized
INFO - 2018-08-11 09:30:13 --> Language Class Initialized
INFO - 2018-08-11 09:30:13 --> Language Class Initialized
INFO - 2018-08-11 09:30:13 --> Config Class Initialized
INFO - 2018-08-11 09:30:13 --> Loader Class Initialized
INFO - 2018-08-11 09:30:13 --> Helper loaded: security_helper
INFO - 2018-08-11 09:30:13 --> Helper loaded: form_helper
INFO - 2018-08-11 09:30:13 --> Helper loaded: url_helper
INFO - 2018-08-11 09:30:13 --> Helper loaded: global_helper
INFO - 2018-08-11 09:30:13 --> Helper loaded: inflector_helper
INFO - 2018-08-11 09:30:13 --> Helper loaded: text_helper
INFO - 2018-08-11 09:30:13 --> Database Driver Class Initialized
INFO - 2018-08-11 09:30:13 --> Model Class Initialized
INFO - 2018-08-11 09:30:13 --> Controller Class Initialized
DEBUG - 2018-08-11 09:30:13 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 09:30:13 --> Email Class Initialized
INFO - 2018-08-11 09:30:13 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 09:30:13 --> Helper loaded: cookie_helper
INFO - 2018-08-11 09:30:13 --> Helper loaded: language_helper
INFO - 2018-08-11 09:30:13 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 09:30:13 --> Model Class Initialized
INFO - 2018-08-11 09:30:13 --> Helper loaded: date_helper
INFO - 2018-08-11 14:30:13 --> Model Class Initialized
INFO - 2018-08-11 14:30:13 --> Form Validation Class Initialized
DEBUG - 2018-08-11 14:30:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 14:30:13 --> Model Class Initialized
DEBUG - 2018-08-11 14:30:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 14:30:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/sections/search_section_home.php
DEBUG - 2018-08-11 14:30:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/lesson_count.php
DEBUG - 2018-08-11 14:30:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/home/views/index.php
DEBUG - 2018-08-11 14:30:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 14:30:13 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 14:30:13 --> Final output sent to browser
DEBUG - 2018-08-11 14:30:13 --> Total execution time: 0.3772
INFO - 2018-08-11 09:30:19 --> Config Class Initialized
INFO - 2018-08-11 09:30:19 --> Hooks Class Initialized
DEBUG - 2018-08-11 09:30:19 --> UTF-8 Support Enabled
INFO - 2018-08-11 09:30:19 --> Utf8 Class Initialized
INFO - 2018-08-11 09:30:19 --> URI Class Initialized
INFO - 2018-08-11 09:30:19 --> Router Class Initialized
INFO - 2018-08-11 09:30:19 --> Output Class Initialized
INFO - 2018-08-11 09:30:19 --> Security Class Initialized
DEBUG - 2018-08-11 09:30:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 09:30:19 --> Input Class Initialized
INFO - 2018-08-11 09:30:19 --> Language Class Initialized
ERROR - 2018-08-11 09:30:19 --> 404 Page Not Found: /index
INFO - 2018-08-11 09:30:21 --> Config Class Initialized
INFO - 2018-08-11 09:30:21 --> Hooks Class Initialized
DEBUG - 2018-08-11 09:30:21 --> UTF-8 Support Enabled
INFO - 2018-08-11 09:30:21 --> Utf8 Class Initialized
INFO - 2018-08-11 09:30:21 --> URI Class Initialized
INFO - 2018-08-11 09:30:21 --> Router Class Initialized
INFO - 2018-08-11 09:30:21 --> Output Class Initialized
INFO - 2018-08-11 09:30:21 --> Security Class Initialized
DEBUG - 2018-08-11 09:30:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 09:30:21 --> Input Class Initialized
INFO - 2018-08-11 09:30:21 --> Language Class Initialized
INFO - 2018-08-11 09:30:21 --> Language Class Initialized
INFO - 2018-08-11 09:30:21 --> Config Class Initialized
INFO - 2018-08-11 09:30:21 --> Loader Class Initialized
INFO - 2018-08-11 09:30:21 --> Helper loaded: security_helper
INFO - 2018-08-11 09:30:21 --> Helper loaded: form_helper
INFO - 2018-08-11 09:30:21 --> Helper loaded: url_helper
INFO - 2018-08-11 09:30:21 --> Helper loaded: global_helper
INFO - 2018-08-11 09:30:21 --> Helper loaded: inflector_helper
INFO - 2018-08-11 09:30:21 --> Helper loaded: text_helper
INFO - 2018-08-11 09:30:21 --> Database Driver Class Initialized
INFO - 2018-08-11 09:30:21 --> Model Class Initialized
INFO - 2018-08-11 09:30:21 --> Controller Class Initialized
DEBUG - 2018-08-11 09:30:21 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 09:30:21 --> Email Class Initialized
INFO - 2018-08-11 09:30:21 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 09:30:21 --> Helper loaded: cookie_helper
INFO - 2018-08-11 09:30:21 --> Helper loaded: language_helper
INFO - 2018-08-11 09:30:21 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 09:30:21 --> Model Class Initialized
INFO - 2018-08-11 09:30:21 --> Helper loaded: date_helper
INFO - 2018-08-11 14:30:21 --> Form Validation Class Initialized
INFO - 2018-08-11 14:30:21 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 14:30:21 --> Model Class Initialized
DEBUG - 2018-08-11 14:30:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 14:30:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/auth/views/login.php
DEBUG - 2018-08-11 14:30:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 14:30:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 14:30:21 --> Final output sent to browser
DEBUG - 2018-08-11 14:30:21 --> Total execution time: 0.1961
INFO - 2018-08-11 09:30:27 --> Config Class Initialized
INFO - 2018-08-11 09:30:27 --> Hooks Class Initialized
DEBUG - 2018-08-11 09:30:27 --> UTF-8 Support Enabled
INFO - 2018-08-11 09:30:27 --> Utf8 Class Initialized
INFO - 2018-08-11 09:30:27 --> URI Class Initialized
INFO - 2018-08-11 09:30:27 --> Router Class Initialized
INFO - 2018-08-11 09:30:27 --> Output Class Initialized
INFO - 2018-08-11 09:30:27 --> Security Class Initialized
DEBUG - 2018-08-11 09:30:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 09:30:27 --> Input Class Initialized
INFO - 2018-08-11 09:30:27 --> Language Class Initialized
INFO - 2018-08-11 09:30:27 --> Language Class Initialized
INFO - 2018-08-11 09:30:27 --> Config Class Initialized
INFO - 2018-08-11 09:30:27 --> Loader Class Initialized
INFO - 2018-08-11 09:30:27 --> Helper loaded: security_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: form_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: url_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: global_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: inflector_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: text_helper
INFO - 2018-08-11 09:30:27 --> Database Driver Class Initialized
INFO - 2018-08-11 09:30:27 --> Model Class Initialized
INFO - 2018-08-11 09:30:27 --> Controller Class Initialized
DEBUG - 2018-08-11 09:30:27 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 09:30:27 --> Email Class Initialized
INFO - 2018-08-11 09:30:27 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 09:30:27 --> Helper loaded: cookie_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: language_helper
INFO - 2018-08-11 09:30:27 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 09:30:27 --> Model Class Initialized
INFO - 2018-08-11 09:30:27 --> Helper loaded: date_helper
INFO - 2018-08-11 14:30:27 --> Form Validation Class Initialized
INFO - 2018-08-11 14:30:27 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 14:30:27 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2018-08-11 09:30:27 --> Config Class Initialized
INFO - 2018-08-11 09:30:27 --> Hooks Class Initialized
DEBUG - 2018-08-11 09:30:27 --> UTF-8 Support Enabled
INFO - 2018-08-11 09:30:27 --> Utf8 Class Initialized
INFO - 2018-08-11 09:30:27 --> URI Class Initialized
INFO - 2018-08-11 09:30:27 --> Router Class Initialized
INFO - 2018-08-11 09:30:27 --> Output Class Initialized
INFO - 2018-08-11 09:30:27 --> Security Class Initialized
DEBUG - 2018-08-11 09:30:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 09:30:27 --> Input Class Initialized
INFO - 2018-08-11 09:30:27 --> Language Class Initialized
INFO - 2018-08-11 09:30:27 --> Language Class Initialized
INFO - 2018-08-11 09:30:27 --> Config Class Initialized
INFO - 2018-08-11 09:30:27 --> Loader Class Initialized
INFO - 2018-08-11 09:30:27 --> Helper loaded: security_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: form_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: url_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: global_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: inflector_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: text_helper
INFO - 2018-08-11 09:30:27 --> Database Driver Class Initialized
INFO - 2018-08-11 09:30:27 --> Model Class Initialized
INFO - 2018-08-11 09:30:27 --> Controller Class Initialized
DEBUG - 2018-08-11 09:30:27 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 09:30:27 --> Email Class Initialized
INFO - 2018-08-11 09:30:27 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 09:30:27 --> Helper loaded: cookie_helper
INFO - 2018-08-11 09:30:27 --> Helper loaded: language_helper
INFO - 2018-08-11 09:30:27 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 09:30:27 --> Model Class Initialized
INFO - 2018-08-11 09:30:27 --> Helper loaded: date_helper
INFO - 2018-08-11 14:30:27 --> Form Validation Class Initialized
INFO - 2018-08-11 14:30:27 --> Model Class Initialized
DEBUG - 2018-08-11 14:30:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 14:30:27 --> Model Class Initialized
DEBUG - 2018-08-11 14:30:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 14:30:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 14:30:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 14:30:27 --> Model Class Initialized
DEBUG - 2018-08-11 14:30:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 14:30:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 14:30:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 14:30:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 14:30:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 14:30:27 --> Final output sent to browser
DEBUG - 2018-08-11 14:30:27 --> Total execution time: 0.1578
INFO - 2018-08-11 09:30:49 --> Config Class Initialized
INFO - 2018-08-11 09:30:49 --> Hooks Class Initialized
DEBUG - 2018-08-11 09:30:49 --> UTF-8 Support Enabled
INFO - 2018-08-11 09:30:49 --> Utf8 Class Initialized
INFO - 2018-08-11 09:30:49 --> URI Class Initialized
INFO - 2018-08-11 09:30:49 --> Router Class Initialized
INFO - 2018-08-11 09:30:49 --> Output Class Initialized
INFO - 2018-08-11 09:30:49 --> Security Class Initialized
DEBUG - 2018-08-11 09:30:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 09:30:49 --> Input Class Initialized
INFO - 2018-08-11 09:30:49 --> Language Class Initialized
INFO - 2018-08-11 09:30:49 --> Language Class Initialized
INFO - 2018-08-11 09:30:49 --> Config Class Initialized
INFO - 2018-08-11 09:30:49 --> Loader Class Initialized
INFO - 2018-08-11 09:30:49 --> Helper loaded: security_helper
INFO - 2018-08-11 09:30:49 --> Helper loaded: form_helper
INFO - 2018-08-11 09:30:49 --> Helper loaded: url_helper
INFO - 2018-08-11 09:30:49 --> Helper loaded: global_helper
INFO - 2018-08-11 09:30:49 --> Helper loaded: inflector_helper
INFO - 2018-08-11 09:30:49 --> Helper loaded: text_helper
INFO - 2018-08-11 09:30:49 --> Database Driver Class Initialized
INFO - 2018-08-11 09:30:49 --> Model Class Initialized
INFO - 2018-08-11 09:30:49 --> Controller Class Initialized
DEBUG - 2018-08-11 09:30:49 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 09:30:49 --> Email Class Initialized
INFO - 2018-08-11 09:30:49 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 09:30:49 --> Helper loaded: cookie_helper
INFO - 2018-08-11 09:30:49 --> Helper loaded: language_helper
INFO - 2018-08-11 09:30:49 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 09:30:49 --> Model Class Initialized
INFO - 2018-08-11 09:30:49 --> Helper loaded: date_helper
INFO - 2018-08-11 14:30:49 --> Form Validation Class Initialized
INFO - 2018-08-11 14:30:49 --> Model Class Initialized
DEBUG - 2018-08-11 14:30:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 14:30:49 --> Model Class Initialized
DEBUG - 2018-08-11 14:30:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 14:30:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 14:30:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 14:30:50 --> Model Class Initialized
DEBUG - 2018-08-11 14:30:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 14:30:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 14:30:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/list_packages.php
DEBUG - 2018-08-11 14:30:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 14:30:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 14:30:50 --> Final output sent to browser
DEBUG - 2018-08-11 14:30:50 --> Total execution time: 0.4055
INFO - 2018-08-11 10:25:33 --> Config Class Initialized
INFO - 2018-08-11 10:25:33 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:25:33 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:25:33 --> Utf8 Class Initialized
INFO - 2018-08-11 10:25:33 --> URI Class Initialized
INFO - 2018-08-11 10:25:33 --> Router Class Initialized
INFO - 2018-08-11 10:25:33 --> Output Class Initialized
INFO - 2018-08-11 10:25:33 --> Security Class Initialized
DEBUG - 2018-08-11 10:25:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:25:33 --> Input Class Initialized
INFO - 2018-08-11 10:25:33 --> Language Class Initialized
INFO - 2018-08-11 10:25:33 --> Language Class Initialized
INFO - 2018-08-11 10:25:33 --> Config Class Initialized
INFO - 2018-08-11 10:25:33 --> Loader Class Initialized
INFO - 2018-08-11 10:25:33 --> Helper loaded: security_helper
INFO - 2018-08-11 10:25:33 --> Helper loaded: form_helper
INFO - 2018-08-11 10:25:33 --> Helper loaded: url_helper
INFO - 2018-08-11 10:25:33 --> Helper loaded: global_helper
INFO - 2018-08-11 10:25:33 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:25:33 --> Helper loaded: text_helper
INFO - 2018-08-11 10:25:33 --> Database Driver Class Initialized
INFO - 2018-08-11 10:25:33 --> Model Class Initialized
INFO - 2018-08-11 10:25:33 --> Controller Class Initialized
DEBUG - 2018-08-11 10:25:33 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:25:33 --> Email Class Initialized
INFO - 2018-08-11 10:25:33 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:25:33 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:25:33 --> Helper loaded: language_helper
INFO - 2018-08-11 10:25:33 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:25:33 --> Model Class Initialized
INFO - 2018-08-11 10:25:33 --> Helper loaded: date_helper
INFO - 2018-08-11 15:25:33 --> Form Validation Class Initialized
INFO - 2018-08-11 15:25:33 --> Model Class Initialized
DEBUG - 2018-08-11 15:25:33 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 15:25:33 --> Model Class Initialized
INFO - 2018-08-11 15:25:33 --> Model Class Initialized
DEBUG - 2018-08-11 15:25:33 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 15:25:33 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 15:25:33 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:25:33 --> Model Class Initialized
DEBUG - 2018-08-11 15:25:33 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 15:25:33 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 15:25:33 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 15:25:33 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 15:25:33 --> Final output sent to browser
DEBUG - 2018-08-11 15:25:33 --> Total execution time: 0.2570
INFO - 2018-08-11 10:40:57 --> Config Class Initialized
INFO - 2018-08-11 10:40:57 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:40:57 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:40:57 --> Utf8 Class Initialized
INFO - 2018-08-11 10:40:57 --> URI Class Initialized
DEBUG - 2018-08-11 10:40:57 --> No URI present. Default controller set.
INFO - 2018-08-11 10:40:57 --> Router Class Initialized
INFO - 2018-08-11 10:40:57 --> Output Class Initialized
INFO - 2018-08-11 10:40:57 --> Security Class Initialized
DEBUG - 2018-08-11 10:40:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:40:57 --> Input Class Initialized
INFO - 2018-08-11 10:40:57 --> Language Class Initialized
INFO - 2018-08-11 10:40:57 --> Language Class Initialized
INFO - 2018-08-11 10:40:57 --> Config Class Initialized
INFO - 2018-08-11 10:40:57 --> Loader Class Initialized
INFO - 2018-08-11 10:40:57 --> Helper loaded: security_helper
INFO - 2018-08-11 10:40:57 --> Helper loaded: form_helper
INFO - 2018-08-11 10:40:57 --> Helper loaded: url_helper
INFO - 2018-08-11 10:40:57 --> Helper loaded: global_helper
INFO - 2018-08-11 10:40:57 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:40:57 --> Helper loaded: text_helper
INFO - 2018-08-11 10:40:57 --> Database Driver Class Initialized
INFO - 2018-08-11 10:40:57 --> Model Class Initialized
INFO - 2018-08-11 10:40:57 --> Controller Class Initialized
DEBUG - 2018-08-11 10:40:57 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:40:57 --> Email Class Initialized
INFO - 2018-08-11 10:40:57 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:40:57 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:40:57 --> Helper loaded: language_helper
INFO - 2018-08-11 10:40:57 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:40:57 --> Model Class Initialized
INFO - 2018-08-11 10:40:57 --> Helper loaded: date_helper
INFO - 2018-08-11 15:40:57 --> Model Class Initialized
INFO - 2018-08-11 15:40:57 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:40:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:40:57 --> Model Class Initialized
DEBUG - 2018-08-11 15:40:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:41:18 --> Config Class Initialized
INFO - 2018-08-11 10:41:18 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:18 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:18 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:18 --> URI Class Initialized
DEBUG - 2018-08-11 10:41:18 --> No URI present. Default controller set.
INFO - 2018-08-11 10:41:18 --> Router Class Initialized
INFO - 2018-08-11 10:41:18 --> Output Class Initialized
INFO - 2018-08-11 10:41:18 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:18 --> Input Class Initialized
INFO - 2018-08-11 10:41:18 --> Language Class Initialized
INFO - 2018-08-11 10:41:18 --> Language Class Initialized
INFO - 2018-08-11 10:41:18 --> Config Class Initialized
INFO - 2018-08-11 10:41:18 --> Loader Class Initialized
INFO - 2018-08-11 10:41:18 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:18 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:18 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:18 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:18 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:18 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:18 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:18 --> Model Class Initialized
INFO - 2018-08-11 10:41:18 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:18 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:18 --> Email Class Initialized
INFO - 2018-08-11 10:41:18 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:18 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:18 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:18 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:18 --> Model Class Initialized
INFO - 2018-08-11 10:41:18 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:18 --> Model Class Initialized
INFO - 2018-08-11 15:41:18 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:41:18 --> Model Class Initialized
DEBUG - 2018-08-11 15:41:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:41:19 --> Config Class Initialized
INFO - 2018-08-11 10:41:19 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:19 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:19 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:19 --> URI Class Initialized
DEBUG - 2018-08-11 10:41:19 --> No URI present. Default controller set.
INFO - 2018-08-11 10:41:19 --> Router Class Initialized
INFO - 2018-08-11 10:41:19 --> Output Class Initialized
INFO - 2018-08-11 10:41:19 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:19 --> Input Class Initialized
INFO - 2018-08-11 10:41:19 --> Language Class Initialized
INFO - 2018-08-11 10:41:19 --> Language Class Initialized
INFO - 2018-08-11 10:41:19 --> Config Class Initialized
INFO - 2018-08-11 10:41:19 --> Loader Class Initialized
INFO - 2018-08-11 10:41:19 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:19 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:19 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:19 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:19 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:19 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:19 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:19 --> Model Class Initialized
INFO - 2018-08-11 10:41:19 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:19 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:19 --> Email Class Initialized
INFO - 2018-08-11 10:41:19 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:19 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:19 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:19 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:19 --> Model Class Initialized
INFO - 2018-08-11 10:41:19 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:19 --> Model Class Initialized
INFO - 2018-08-11 15:41:19 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:41:19 --> Model Class Initialized
DEBUG - 2018-08-11 15:41:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:41:35 --> Config Class Initialized
INFO - 2018-08-11 10:41:35 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:35 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:35 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:35 --> URI Class Initialized
DEBUG - 2018-08-11 10:41:35 --> No URI present. Default controller set.
INFO - 2018-08-11 10:41:35 --> Router Class Initialized
INFO - 2018-08-11 10:41:35 --> Output Class Initialized
INFO - 2018-08-11 10:41:35 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:35 --> Input Class Initialized
INFO - 2018-08-11 10:41:35 --> Language Class Initialized
INFO - 2018-08-11 10:41:35 --> Language Class Initialized
INFO - 2018-08-11 10:41:35 --> Config Class Initialized
INFO - 2018-08-11 10:41:35 --> Loader Class Initialized
INFO - 2018-08-11 10:41:35 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:35 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:35 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:35 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:35 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:35 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:35 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:35 --> Model Class Initialized
INFO - 2018-08-11 10:41:35 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:35 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:35 --> Email Class Initialized
INFO - 2018-08-11 10:41:35 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:35 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:35 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:35 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:35 --> Model Class Initialized
INFO - 2018-08-11 10:41:35 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:35 --> Model Class Initialized
INFO - 2018-08-11 15:41:35 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:41:35 --> Model Class Initialized
DEBUG - 2018-08-11 15:41:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:41:38 --> Config Class Initialized
INFO - 2018-08-11 10:41:38 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:38 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:38 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:38 --> URI Class Initialized
DEBUG - 2018-08-11 10:41:38 --> No URI present. Default controller set.
INFO - 2018-08-11 10:41:38 --> Router Class Initialized
INFO - 2018-08-11 10:41:38 --> Output Class Initialized
INFO - 2018-08-11 10:41:38 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:38 --> Input Class Initialized
INFO - 2018-08-11 10:41:38 --> Language Class Initialized
INFO - 2018-08-11 10:41:38 --> Language Class Initialized
INFO - 2018-08-11 10:41:38 --> Config Class Initialized
INFO - 2018-08-11 10:41:38 --> Loader Class Initialized
INFO - 2018-08-11 10:41:38 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:38 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:38 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:38 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:38 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:38 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:38 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:38 --> Model Class Initialized
INFO - 2018-08-11 10:41:38 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:38 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:38 --> Email Class Initialized
INFO - 2018-08-11 10:41:38 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:38 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:38 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:38 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:38 --> Model Class Initialized
INFO - 2018-08-11 10:41:38 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:38 --> Model Class Initialized
INFO - 2018-08-11 15:41:38 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:41:38 --> Model Class Initialized
DEBUG - 2018-08-11 15:41:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:41:39 --> Config Class Initialized
INFO - 2018-08-11 10:41:39 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:39 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:39 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:39 --> URI Class Initialized
INFO - 2018-08-11 10:41:39 --> Router Class Initialized
INFO - 2018-08-11 10:41:39 --> Output Class Initialized
INFO - 2018-08-11 10:41:39 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:39 --> Input Class Initialized
INFO - 2018-08-11 10:41:39 --> Language Class Initialized
INFO - 2018-08-11 10:41:39 --> Language Class Initialized
INFO - 2018-08-11 10:41:39 --> Config Class Initialized
INFO - 2018-08-11 10:41:39 --> Loader Class Initialized
INFO - 2018-08-11 10:41:39 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:39 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:39 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:39 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:39 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:39 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:39 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:39 --> Model Class Initialized
INFO - 2018-08-11 10:41:39 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:39 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:39 --> Email Class Initialized
INFO - 2018-08-11 10:41:39 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:39 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:39 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:39 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:39 --> Model Class Initialized
INFO - 2018-08-11 10:41:39 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:39 --> Model Class Initialized
INFO - 2018-08-11 15:41:39 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:41:39 --> Model Class Initialized
ERROR - 2018-08-11 15:41:39 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 15:41:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 15:41:39 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 10:41:41 --> Config Class Initialized
INFO - 2018-08-11 10:41:41 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:41 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:41 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:41 --> URI Class Initialized
DEBUG - 2018-08-11 10:41:41 --> No URI present. Default controller set.
INFO - 2018-08-11 10:41:41 --> Router Class Initialized
INFO - 2018-08-11 10:41:41 --> Output Class Initialized
INFO - 2018-08-11 10:41:41 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:41 --> Input Class Initialized
INFO - 2018-08-11 10:41:41 --> Language Class Initialized
INFO - 2018-08-11 10:41:41 --> Language Class Initialized
INFO - 2018-08-11 10:41:41 --> Config Class Initialized
INFO - 2018-08-11 10:41:41 --> Loader Class Initialized
INFO - 2018-08-11 10:41:41 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:41 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:41 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:41 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:41 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:41 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:41 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:41 --> Model Class Initialized
INFO - 2018-08-11 10:41:41 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:41 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:41 --> Email Class Initialized
INFO - 2018-08-11 10:41:41 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:41 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:41 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:41 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:41 --> Model Class Initialized
INFO - 2018-08-11 10:41:41 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:41 --> Model Class Initialized
INFO - 2018-08-11 15:41:41 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:41 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:41:41 --> Model Class Initialized
DEBUG - 2018-08-11 15:41:41 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:41:43 --> Config Class Initialized
INFO - 2018-08-11 10:41:43 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:43 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:43 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:43 --> URI Class Initialized
INFO - 2018-08-11 10:41:43 --> Router Class Initialized
INFO - 2018-08-11 10:41:43 --> Output Class Initialized
INFO - 2018-08-11 10:41:43 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:43 --> Input Class Initialized
INFO - 2018-08-11 10:41:43 --> Language Class Initialized
INFO - 2018-08-11 10:41:43 --> Language Class Initialized
INFO - 2018-08-11 10:41:43 --> Config Class Initialized
INFO - 2018-08-11 10:41:43 --> Loader Class Initialized
INFO - 2018-08-11 10:41:43 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:43 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:43 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:43 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:43 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:43 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:43 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:43 --> Model Class Initialized
INFO - 2018-08-11 10:41:43 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:43 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:43 --> Email Class Initialized
INFO - 2018-08-11 10:41:43 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:43 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:43 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:43 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:43 --> Model Class Initialized
INFO - 2018-08-11 10:41:43 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:43 --> Model Class Initialized
INFO - 2018-08-11 15:41:43 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:41:43 --> Model Class Initialized
DEBUG - 2018-08-11 15:41:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:41:45 --> Config Class Initialized
INFO - 2018-08-11 10:41:45 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:45 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:45 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:45 --> URI Class Initialized
DEBUG - 2018-08-11 10:41:45 --> No URI present. Default controller set.
INFO - 2018-08-11 10:41:45 --> Router Class Initialized
INFO - 2018-08-11 10:41:45 --> Output Class Initialized
INFO - 2018-08-11 10:41:45 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:45 --> Input Class Initialized
INFO - 2018-08-11 10:41:45 --> Language Class Initialized
INFO - 2018-08-11 10:41:45 --> Language Class Initialized
INFO - 2018-08-11 10:41:45 --> Config Class Initialized
INFO - 2018-08-11 10:41:45 --> Loader Class Initialized
INFO - 2018-08-11 10:41:45 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:45 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:45 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:45 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:45 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:45 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:45 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:45 --> Model Class Initialized
INFO - 2018-08-11 10:41:45 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:45 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:45 --> Email Class Initialized
INFO - 2018-08-11 10:41:45 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:45 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:45 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:45 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:45 --> Model Class Initialized
INFO - 2018-08-11 10:41:45 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:45 --> Model Class Initialized
INFO - 2018-08-11 15:41:45 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:45 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:41:45 --> Model Class Initialized
DEBUG - 2018-08-11 15:41:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:41:48 --> Config Class Initialized
INFO - 2018-08-11 10:41:48 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:48 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:48 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:48 --> URI Class Initialized
INFO - 2018-08-11 10:41:48 --> Router Class Initialized
INFO - 2018-08-11 10:41:48 --> Output Class Initialized
INFO - 2018-08-11 10:41:48 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:48 --> Input Class Initialized
INFO - 2018-08-11 10:41:48 --> Language Class Initialized
INFO - 2018-08-11 10:41:48 --> Language Class Initialized
INFO - 2018-08-11 10:41:48 --> Config Class Initialized
INFO - 2018-08-11 10:41:48 --> Loader Class Initialized
INFO - 2018-08-11 10:41:48 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:48 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:48 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:48 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:48 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:48 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:48 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:48 --> Model Class Initialized
INFO - 2018-08-11 10:41:48 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:48 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:48 --> Email Class Initialized
INFO - 2018-08-11 10:41:48 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:48 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:48 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:48 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:48 --> Model Class Initialized
INFO - 2018-08-11 10:41:48 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:48 --> Model Class Initialized
INFO - 2018-08-11 15:41:48 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:41:51 --> Config Class Initialized
INFO - 2018-08-11 10:41:51 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:51 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:51 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:51 --> URI Class Initialized
INFO - 2018-08-11 10:41:51 --> Router Class Initialized
INFO - 2018-08-11 10:41:51 --> Output Class Initialized
INFO - 2018-08-11 10:41:51 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:51 --> Input Class Initialized
INFO - 2018-08-11 10:41:51 --> Language Class Initialized
INFO - 2018-08-11 10:41:51 --> Language Class Initialized
INFO - 2018-08-11 10:41:51 --> Config Class Initialized
INFO - 2018-08-11 10:41:51 --> Loader Class Initialized
INFO - 2018-08-11 10:41:51 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:51 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:51 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:51 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:51 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:51 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:51 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:51 --> Model Class Initialized
INFO - 2018-08-11 10:41:51 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:51 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:51 --> Email Class Initialized
INFO - 2018-08-11 10:41:51 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:51 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:51 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:51 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:51 --> Model Class Initialized
INFO - 2018-08-11 10:41:51 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:51 --> Model Class Initialized
INFO - 2018-08-11 15:41:51 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:41:51 --> Model Class Initialized
ERROR - 2018-08-11 15:41:51 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 15:41:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 15:41:51 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 10:41:56 --> Config Class Initialized
INFO - 2018-08-11 10:41:56 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:41:56 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:41:56 --> Utf8 Class Initialized
INFO - 2018-08-11 10:41:56 --> URI Class Initialized
DEBUG - 2018-08-11 10:41:56 --> No URI present. Default controller set.
INFO - 2018-08-11 10:41:56 --> Router Class Initialized
INFO - 2018-08-11 10:41:56 --> Output Class Initialized
INFO - 2018-08-11 10:41:56 --> Security Class Initialized
DEBUG - 2018-08-11 10:41:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:41:56 --> Input Class Initialized
INFO - 2018-08-11 10:41:56 --> Language Class Initialized
INFO - 2018-08-11 10:41:56 --> Language Class Initialized
INFO - 2018-08-11 10:41:56 --> Config Class Initialized
INFO - 2018-08-11 10:41:56 --> Loader Class Initialized
INFO - 2018-08-11 10:41:56 --> Helper loaded: security_helper
INFO - 2018-08-11 10:41:56 --> Helper loaded: form_helper
INFO - 2018-08-11 10:41:56 --> Helper loaded: url_helper
INFO - 2018-08-11 10:41:56 --> Helper loaded: global_helper
INFO - 2018-08-11 10:41:56 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:41:56 --> Helper loaded: text_helper
INFO - 2018-08-11 10:41:56 --> Database Driver Class Initialized
INFO - 2018-08-11 10:41:56 --> Model Class Initialized
INFO - 2018-08-11 10:41:56 --> Controller Class Initialized
DEBUG - 2018-08-11 10:41:56 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:41:56 --> Email Class Initialized
INFO - 2018-08-11 10:41:56 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:41:56 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:41:56 --> Helper loaded: language_helper
INFO - 2018-08-11 10:41:56 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:41:56 --> Model Class Initialized
INFO - 2018-08-11 10:41:56 --> Helper loaded: date_helper
INFO - 2018-08-11 15:41:56 --> Model Class Initialized
INFO - 2018-08-11 15:41:56 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:41:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:41:56 --> Model Class Initialized
DEBUG - 2018-08-11 15:41:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:43:59 --> Config Class Initialized
INFO - 2018-08-11 10:43:59 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:43:59 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:43:59 --> Utf8 Class Initialized
INFO - 2018-08-11 10:43:59 --> URI Class Initialized
INFO - 2018-08-11 10:43:59 --> Router Class Initialized
INFO - 2018-08-11 10:43:59 --> Output Class Initialized
INFO - 2018-08-11 10:43:59 --> Security Class Initialized
DEBUG - 2018-08-11 10:43:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:43:59 --> Input Class Initialized
INFO - 2018-08-11 10:43:59 --> Language Class Initialized
INFO - 2018-08-11 10:43:59 --> Language Class Initialized
INFO - 2018-08-11 10:43:59 --> Config Class Initialized
INFO - 2018-08-11 10:43:59 --> Loader Class Initialized
INFO - 2018-08-11 10:43:59 --> Helper loaded: security_helper
INFO - 2018-08-11 10:43:59 --> Helper loaded: form_helper
INFO - 2018-08-11 10:43:59 --> Helper loaded: url_helper
INFO - 2018-08-11 10:43:59 --> Helper loaded: global_helper
INFO - 2018-08-11 10:43:59 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:43:59 --> Helper loaded: text_helper
INFO - 2018-08-11 10:43:59 --> Database Driver Class Initialized
INFO - 2018-08-11 10:43:59 --> Model Class Initialized
INFO - 2018-08-11 10:43:59 --> Controller Class Initialized
DEBUG - 2018-08-11 10:43:59 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:43:59 --> Email Class Initialized
INFO - 2018-08-11 10:43:59 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:43:59 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:43:59 --> Helper loaded: language_helper
INFO - 2018-08-11 10:43:59 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:43:59 --> Model Class Initialized
INFO - 2018-08-11 10:43:59 --> Helper loaded: date_helper
INFO - 2018-08-11 15:43:59 --> Form Validation Class Initialized
INFO - 2018-08-11 15:43:59 --> Model Class Initialized
DEBUG - 2018-08-11 15:43:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 15:43:59 --> Model Class Initialized
DEBUG - 2018-08-11 15:43:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 15:43:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 15:43:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:43:59 --> Model Class Initialized
DEBUG - 2018-08-11 15:43:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 15:43:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 15:43:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 15:43:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 15:43:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 15:43:59 --> Final output sent to browser
DEBUG - 2018-08-11 15:43:59 --> Total execution time: 0.2223
INFO - 2018-08-11 10:44:10 --> Config Class Initialized
INFO - 2018-08-11 10:44:10 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:44:10 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:44:10 --> Utf8 Class Initialized
INFO - 2018-08-11 10:44:10 --> URI Class Initialized
INFO - 2018-08-11 10:44:10 --> Router Class Initialized
INFO - 2018-08-11 10:44:10 --> Output Class Initialized
INFO - 2018-08-11 10:44:10 --> Security Class Initialized
DEBUG - 2018-08-11 10:44:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:44:10 --> Input Class Initialized
INFO - 2018-08-11 10:44:10 --> Language Class Initialized
INFO - 2018-08-11 10:44:10 --> Language Class Initialized
INFO - 2018-08-11 10:44:10 --> Config Class Initialized
INFO - 2018-08-11 10:44:10 --> Loader Class Initialized
INFO - 2018-08-11 10:44:10 --> Helper loaded: security_helper
INFO - 2018-08-11 10:44:10 --> Helper loaded: form_helper
INFO - 2018-08-11 10:44:10 --> Helper loaded: url_helper
INFO - 2018-08-11 10:44:10 --> Helper loaded: global_helper
INFO - 2018-08-11 10:44:10 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:44:10 --> Helper loaded: text_helper
INFO - 2018-08-11 10:44:10 --> Database Driver Class Initialized
INFO - 2018-08-11 10:44:10 --> Model Class Initialized
INFO - 2018-08-11 10:44:10 --> Controller Class Initialized
DEBUG - 2018-08-11 10:44:10 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:44:10 --> Email Class Initialized
INFO - 2018-08-11 10:44:10 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:44:10 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:44:10 --> Helper loaded: language_helper
INFO - 2018-08-11 10:44:10 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:44:10 --> Model Class Initialized
INFO - 2018-08-11 10:44:10 --> Helper loaded: date_helper
INFO - 2018-08-11 15:44:10 --> Model Class Initialized
INFO - 2018-08-11 15:44:10 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:44:10 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:45:22 --> Config Class Initialized
INFO - 2018-08-11 10:45:22 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:45:22 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:45:22 --> Utf8 Class Initialized
INFO - 2018-08-11 10:45:22 --> URI Class Initialized
DEBUG - 2018-08-11 10:45:22 --> No URI present. Default controller set.
INFO - 2018-08-11 10:45:22 --> Router Class Initialized
INFO - 2018-08-11 10:45:22 --> Output Class Initialized
INFO - 2018-08-11 10:45:22 --> Security Class Initialized
DEBUG - 2018-08-11 10:45:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:45:22 --> Input Class Initialized
INFO - 2018-08-11 10:45:22 --> Language Class Initialized
INFO - 2018-08-11 10:45:22 --> Language Class Initialized
INFO - 2018-08-11 10:45:22 --> Config Class Initialized
INFO - 2018-08-11 10:45:22 --> Loader Class Initialized
INFO - 2018-08-11 10:45:22 --> Helper loaded: security_helper
INFO - 2018-08-11 10:45:22 --> Helper loaded: form_helper
INFO - 2018-08-11 10:45:22 --> Helper loaded: url_helper
INFO - 2018-08-11 10:45:22 --> Helper loaded: global_helper
INFO - 2018-08-11 10:45:22 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:45:22 --> Helper loaded: text_helper
INFO - 2018-08-11 10:45:22 --> Database Driver Class Initialized
INFO - 2018-08-11 10:45:22 --> Model Class Initialized
INFO - 2018-08-11 10:45:22 --> Controller Class Initialized
DEBUG - 2018-08-11 10:45:22 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:45:22 --> Email Class Initialized
INFO - 2018-08-11 10:45:22 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:45:22 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:45:22 --> Helper loaded: language_helper
INFO - 2018-08-11 10:45:22 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:45:22 --> Model Class Initialized
INFO - 2018-08-11 10:45:22 --> Helper loaded: date_helper
INFO - 2018-08-11 15:45:22 --> Model Class Initialized
INFO - 2018-08-11 15:45:22 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:45:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:45:22 --> Model Class Initialized
DEBUG - 2018-08-11 15:45:22 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:45:24 --> Config Class Initialized
INFO - 2018-08-11 10:45:24 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:45:24 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:45:24 --> Utf8 Class Initialized
INFO - 2018-08-11 10:45:24 --> URI Class Initialized
INFO - 2018-08-11 10:45:24 --> Router Class Initialized
INFO - 2018-08-11 10:45:24 --> Output Class Initialized
INFO - 2018-08-11 10:45:24 --> Security Class Initialized
DEBUG - 2018-08-11 10:45:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:45:24 --> Input Class Initialized
INFO - 2018-08-11 10:45:24 --> Language Class Initialized
INFO - 2018-08-11 10:45:24 --> Language Class Initialized
INFO - 2018-08-11 10:45:24 --> Config Class Initialized
INFO - 2018-08-11 10:45:24 --> Loader Class Initialized
INFO - 2018-08-11 10:45:24 --> Helper loaded: security_helper
INFO - 2018-08-11 10:45:24 --> Helper loaded: form_helper
INFO - 2018-08-11 10:45:24 --> Helper loaded: url_helper
INFO - 2018-08-11 10:45:24 --> Helper loaded: global_helper
INFO - 2018-08-11 10:45:24 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:45:24 --> Helper loaded: text_helper
INFO - 2018-08-11 10:45:24 --> Database Driver Class Initialized
INFO - 2018-08-11 10:45:24 --> Model Class Initialized
INFO - 2018-08-11 10:45:24 --> Controller Class Initialized
DEBUG - 2018-08-11 10:45:24 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:45:24 --> Email Class Initialized
INFO - 2018-08-11 10:45:24 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:45:24 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:45:24 --> Helper loaded: language_helper
INFO - 2018-08-11 10:45:24 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:45:24 --> Model Class Initialized
INFO - 2018-08-11 10:45:24 --> Helper loaded: date_helper
INFO - 2018-08-11 15:45:24 --> Form Validation Class Initialized
INFO - 2018-08-11 15:45:24 --> Model Class Initialized
DEBUG - 2018-08-11 15:45:24 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 15:45:24 --> Model Class Initialized
DEBUG - 2018-08-11 15:45:24 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 15:45:24 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 15:45:24 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:45:24 --> Model Class Initialized
DEBUG - 2018-08-11 15:45:24 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 15:45:24 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 15:45:24 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 15:45:24 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 15:45:24 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 15:45:24 --> Final output sent to browser
DEBUG - 2018-08-11 15:45:24 --> Total execution time: 0.1863
INFO - 2018-08-11 10:45:36 --> Config Class Initialized
INFO - 2018-08-11 10:45:36 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:45:36 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:45:36 --> Utf8 Class Initialized
INFO - 2018-08-11 10:45:36 --> URI Class Initialized
INFO - 2018-08-11 10:45:36 --> Router Class Initialized
INFO - 2018-08-11 10:45:36 --> Output Class Initialized
INFO - 2018-08-11 10:45:36 --> Security Class Initialized
DEBUG - 2018-08-11 10:45:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:45:36 --> Input Class Initialized
INFO - 2018-08-11 10:45:36 --> Language Class Initialized
INFO - 2018-08-11 10:45:36 --> Language Class Initialized
INFO - 2018-08-11 10:45:36 --> Config Class Initialized
INFO - 2018-08-11 10:45:36 --> Loader Class Initialized
INFO - 2018-08-11 10:45:36 --> Helper loaded: security_helper
INFO - 2018-08-11 10:45:36 --> Helper loaded: form_helper
INFO - 2018-08-11 10:45:36 --> Helper loaded: url_helper
INFO - 2018-08-11 10:45:36 --> Helper loaded: global_helper
INFO - 2018-08-11 10:45:36 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:45:36 --> Helper loaded: text_helper
INFO - 2018-08-11 10:45:36 --> Database Driver Class Initialized
INFO - 2018-08-11 10:45:36 --> Model Class Initialized
INFO - 2018-08-11 10:45:36 --> Controller Class Initialized
DEBUG - 2018-08-11 10:45:36 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:45:36 --> Email Class Initialized
INFO - 2018-08-11 10:45:36 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:45:36 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:45:36 --> Helper loaded: language_helper
INFO - 2018-08-11 10:45:36 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:45:36 --> Model Class Initialized
INFO - 2018-08-11 10:45:36 --> Helper loaded: date_helper
INFO - 2018-08-11 15:45:36 --> Model Class Initialized
INFO - 2018-08-11 15:45:36 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:45:36 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:45:42 --> Config Class Initialized
INFO - 2018-08-11 10:45:42 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:45:42 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:45:42 --> Utf8 Class Initialized
INFO - 2018-08-11 10:45:42 --> URI Class Initialized
INFO - 2018-08-11 10:45:42 --> Router Class Initialized
INFO - 2018-08-11 10:45:42 --> Output Class Initialized
INFO - 2018-08-11 10:45:42 --> Security Class Initialized
DEBUG - 2018-08-11 10:45:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:45:42 --> Input Class Initialized
INFO - 2018-08-11 10:45:42 --> Language Class Initialized
INFO - 2018-08-11 10:45:42 --> Language Class Initialized
INFO - 2018-08-11 10:45:42 --> Config Class Initialized
INFO - 2018-08-11 10:45:42 --> Loader Class Initialized
INFO - 2018-08-11 10:45:42 --> Helper loaded: security_helper
INFO - 2018-08-11 10:45:42 --> Helper loaded: form_helper
INFO - 2018-08-11 10:45:42 --> Helper loaded: url_helper
INFO - 2018-08-11 10:45:42 --> Helper loaded: global_helper
INFO - 2018-08-11 10:45:42 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:45:42 --> Helper loaded: text_helper
INFO - 2018-08-11 10:45:42 --> Database Driver Class Initialized
INFO - 2018-08-11 10:45:42 --> Model Class Initialized
INFO - 2018-08-11 10:45:42 --> Controller Class Initialized
DEBUG - 2018-08-11 10:45:42 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:45:42 --> Email Class Initialized
INFO - 2018-08-11 10:45:42 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:45:42 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:45:42 --> Helper loaded: language_helper
INFO - 2018-08-11 10:45:42 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:45:42 --> Model Class Initialized
INFO - 2018-08-11 10:45:42 --> Helper loaded: date_helper
INFO - 2018-08-11 15:45:42 --> Form Validation Class Initialized
INFO - 2018-08-11 15:45:42 --> Model Class Initialized
DEBUG - 2018-08-11 15:45:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 15:45:42 --> Model Class Initialized
DEBUG - 2018-08-11 15:45:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 15:45:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 15:45:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:45:42 --> Model Class Initialized
DEBUG - 2018-08-11 15:45:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 15:45:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 15:45:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 15:45:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 15:45:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 15:45:42 --> Final output sent to browser
DEBUG - 2018-08-11 15:45:42 --> Total execution time: 0.1179
INFO - 2018-08-11 10:45:46 --> Config Class Initialized
INFO - 2018-08-11 10:45:46 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:45:46 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:45:46 --> Utf8 Class Initialized
INFO - 2018-08-11 10:45:46 --> URI Class Initialized
INFO - 2018-08-11 10:45:46 --> Router Class Initialized
INFO - 2018-08-11 10:45:46 --> Output Class Initialized
INFO - 2018-08-11 10:45:46 --> Security Class Initialized
DEBUG - 2018-08-11 10:45:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:45:46 --> Input Class Initialized
INFO - 2018-08-11 10:45:46 --> Language Class Initialized
INFO - 2018-08-11 10:45:46 --> Language Class Initialized
INFO - 2018-08-11 10:45:46 --> Config Class Initialized
INFO - 2018-08-11 10:45:46 --> Loader Class Initialized
INFO - 2018-08-11 10:45:46 --> Helper loaded: security_helper
INFO - 2018-08-11 10:45:46 --> Helper loaded: form_helper
INFO - 2018-08-11 10:45:46 --> Helper loaded: url_helper
INFO - 2018-08-11 10:45:46 --> Helper loaded: global_helper
INFO - 2018-08-11 10:45:46 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:45:46 --> Helper loaded: text_helper
INFO - 2018-08-11 10:45:46 --> Database Driver Class Initialized
INFO - 2018-08-11 10:45:46 --> Model Class Initialized
INFO - 2018-08-11 10:45:46 --> Controller Class Initialized
DEBUG - 2018-08-11 10:45:46 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:45:46 --> Email Class Initialized
INFO - 2018-08-11 10:45:46 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:45:46 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:45:46 --> Helper loaded: language_helper
INFO - 2018-08-11 10:45:46 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:45:46 --> Model Class Initialized
INFO - 2018-08-11 10:45:46 --> Helper loaded: date_helper
INFO - 2018-08-11 15:45:46 --> Model Class Initialized
INFO - 2018-08-11 15:45:46 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:45:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:50:20 --> Config Class Initialized
INFO - 2018-08-11 10:50:20 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:50:20 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:50:20 --> Utf8 Class Initialized
INFO - 2018-08-11 10:50:20 --> URI Class Initialized
INFO - 2018-08-11 10:50:20 --> Router Class Initialized
INFO - 2018-08-11 10:50:20 --> Output Class Initialized
INFO - 2018-08-11 10:50:20 --> Security Class Initialized
DEBUG - 2018-08-11 10:50:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:50:20 --> Input Class Initialized
INFO - 2018-08-11 10:50:20 --> Language Class Initialized
INFO - 2018-08-11 10:50:20 --> Language Class Initialized
INFO - 2018-08-11 10:50:20 --> Config Class Initialized
INFO - 2018-08-11 10:50:20 --> Loader Class Initialized
INFO - 2018-08-11 10:50:20 --> Helper loaded: security_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: form_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: url_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: global_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: text_helper
INFO - 2018-08-11 10:50:20 --> Database Driver Class Initialized
INFO - 2018-08-11 10:50:20 --> Model Class Initialized
INFO - 2018-08-11 10:50:20 --> Controller Class Initialized
DEBUG - 2018-08-11 10:50:20 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:50:20 --> Email Class Initialized
INFO - 2018-08-11 10:50:20 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:50:20 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: language_helper
INFO - 2018-08-11 10:50:20 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:50:20 --> Model Class Initialized
INFO - 2018-08-11 10:50:20 --> Helper loaded: date_helper
INFO - 2018-08-11 15:50:20 --> Model Class Initialized
INFO - 2018-08-11 15:50:20 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:50:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:50:20 --> Model Class Initialized
INFO - 2018-08-11 10:50:20 --> Config Class Initialized
INFO - 2018-08-11 10:50:20 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:50:20 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:50:20 --> Utf8 Class Initialized
INFO - 2018-08-11 10:50:20 --> URI Class Initialized
INFO - 2018-08-11 10:50:20 --> Router Class Initialized
INFO - 2018-08-11 10:50:20 --> Output Class Initialized
INFO - 2018-08-11 10:50:20 --> Security Class Initialized
DEBUG - 2018-08-11 10:50:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:50:20 --> Input Class Initialized
INFO - 2018-08-11 10:50:20 --> Language Class Initialized
INFO - 2018-08-11 10:50:20 --> Language Class Initialized
INFO - 2018-08-11 10:50:20 --> Config Class Initialized
INFO - 2018-08-11 10:50:20 --> Loader Class Initialized
INFO - 2018-08-11 10:50:20 --> Helper loaded: security_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: form_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: url_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: global_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: text_helper
INFO - 2018-08-11 10:50:20 --> Database Driver Class Initialized
INFO - 2018-08-11 10:50:20 --> Model Class Initialized
INFO - 2018-08-11 10:50:20 --> Controller Class Initialized
DEBUG - 2018-08-11 10:50:20 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:50:20 --> Email Class Initialized
INFO - 2018-08-11 10:50:20 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:50:20 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:50:20 --> Helper loaded: language_helper
DEBUG - 2018-08-11 15:50:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:50:21 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:50:21 --> Model Class Initialized
INFO - 2018-08-11 10:50:21 --> Helper loaded: date_helper
INFO - 2018-08-11 15:50:21 --> Model Class Initialized
INFO - 2018-08-11 15:50:21 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:50:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:50:21 --> Model Class Initialized
ERROR - 2018-08-11 15:50:21 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 15:50:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 15:50:21 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 10:50:40 --> Config Class Initialized
INFO - 2018-08-11 10:50:40 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:50:40 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:50:40 --> Utf8 Class Initialized
INFO - 2018-08-11 10:50:40 --> URI Class Initialized
INFO - 2018-08-11 10:50:40 --> Router Class Initialized
INFO - 2018-08-11 10:50:40 --> Output Class Initialized
INFO - 2018-08-11 10:50:40 --> Security Class Initialized
DEBUG - 2018-08-11 10:50:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:50:40 --> Input Class Initialized
INFO - 2018-08-11 10:50:40 --> Language Class Initialized
INFO - 2018-08-11 10:50:40 --> Language Class Initialized
INFO - 2018-08-11 10:50:40 --> Config Class Initialized
INFO - 2018-08-11 10:50:40 --> Loader Class Initialized
INFO - 2018-08-11 10:50:40 --> Helper loaded: security_helper
INFO - 2018-08-11 10:50:40 --> Helper loaded: form_helper
INFO - 2018-08-11 10:50:40 --> Helper loaded: url_helper
INFO - 2018-08-11 10:50:40 --> Helper loaded: global_helper
INFO - 2018-08-11 10:50:40 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:50:40 --> Helper loaded: text_helper
INFO - 2018-08-11 10:50:40 --> Database Driver Class Initialized
INFO - 2018-08-11 10:50:40 --> Model Class Initialized
INFO - 2018-08-11 10:50:40 --> Controller Class Initialized
DEBUG - 2018-08-11 10:50:40 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:50:40 --> Email Class Initialized
INFO - 2018-08-11 10:50:40 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:50:40 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:50:40 --> Helper loaded: language_helper
INFO - 2018-08-11 10:50:40 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:50:40 --> Model Class Initialized
INFO - 2018-08-11 10:50:40 --> Helper loaded: date_helper
INFO - 2018-08-11 15:50:40 --> Model Class Initialized
INFO - 2018-08-11 15:50:40 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:50:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:50:40 --> Model Class Initialized
ERROR - 2018-08-11 15:50:40 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 15:50:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 15:50:40 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 10:50:54 --> Config Class Initialized
INFO - 2018-08-11 10:50:54 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:50:54 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:50:54 --> Utf8 Class Initialized
INFO - 2018-08-11 10:50:54 --> URI Class Initialized
DEBUG - 2018-08-11 10:50:54 --> No URI present. Default controller set.
INFO - 2018-08-11 10:50:54 --> Router Class Initialized
INFO - 2018-08-11 10:50:54 --> Output Class Initialized
INFO - 2018-08-11 10:50:54 --> Security Class Initialized
DEBUG - 2018-08-11 10:50:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:50:54 --> Input Class Initialized
INFO - 2018-08-11 10:50:54 --> Language Class Initialized
INFO - 2018-08-11 10:50:54 --> Language Class Initialized
INFO - 2018-08-11 10:50:54 --> Config Class Initialized
INFO - 2018-08-11 10:50:54 --> Loader Class Initialized
INFO - 2018-08-11 10:50:54 --> Helper loaded: security_helper
INFO - 2018-08-11 10:50:54 --> Helper loaded: form_helper
INFO - 2018-08-11 10:50:54 --> Helper loaded: url_helper
INFO - 2018-08-11 10:50:54 --> Helper loaded: global_helper
INFO - 2018-08-11 10:50:54 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:50:54 --> Helper loaded: text_helper
INFO - 2018-08-11 10:50:54 --> Database Driver Class Initialized
INFO - 2018-08-11 10:50:54 --> Model Class Initialized
INFO - 2018-08-11 10:50:54 --> Controller Class Initialized
DEBUG - 2018-08-11 10:50:54 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:50:54 --> Email Class Initialized
INFO - 2018-08-11 10:50:54 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:50:54 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:50:54 --> Helper loaded: language_helper
INFO - 2018-08-11 10:50:54 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:50:54 --> Model Class Initialized
INFO - 2018-08-11 10:50:54 --> Helper loaded: date_helper
INFO - 2018-08-11 15:50:54 --> Model Class Initialized
INFO - 2018-08-11 15:50:54 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:50:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:50:54 --> Model Class Initialized
DEBUG - 2018-08-11 15:50:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:57:14 --> Config Class Initialized
INFO - 2018-08-11 10:57:14 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:57:14 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:57:14 --> Utf8 Class Initialized
INFO - 2018-08-11 10:57:14 --> URI Class Initialized
INFO - 2018-08-11 10:57:14 --> Router Class Initialized
INFO - 2018-08-11 10:57:14 --> Output Class Initialized
INFO - 2018-08-11 10:57:14 --> Security Class Initialized
DEBUG - 2018-08-11 10:57:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:57:14 --> Input Class Initialized
INFO - 2018-08-11 10:57:14 --> Language Class Initialized
INFO - 2018-08-11 10:57:14 --> Language Class Initialized
INFO - 2018-08-11 10:57:14 --> Config Class Initialized
INFO - 2018-08-11 10:57:14 --> Loader Class Initialized
INFO - 2018-08-11 10:57:14 --> Helper loaded: security_helper
INFO - 2018-08-11 10:57:14 --> Helper loaded: form_helper
INFO - 2018-08-11 10:57:14 --> Helper loaded: url_helper
INFO - 2018-08-11 10:57:14 --> Helper loaded: global_helper
INFO - 2018-08-11 10:57:14 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:57:14 --> Helper loaded: text_helper
INFO - 2018-08-11 10:57:14 --> Database Driver Class Initialized
INFO - 2018-08-11 10:57:14 --> Model Class Initialized
INFO - 2018-08-11 10:57:14 --> Controller Class Initialized
DEBUG - 2018-08-11 10:57:14 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:57:14 --> Email Class Initialized
INFO - 2018-08-11 10:57:14 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:57:14 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:57:14 --> Helper loaded: language_helper
INFO - 2018-08-11 10:57:14 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:57:14 --> Model Class Initialized
INFO - 2018-08-11 10:57:14 --> Helper loaded: date_helper
INFO - 2018-08-11 15:57:14 --> Form Validation Class Initialized
INFO - 2018-08-11 15:57:14 --> Model Class Initialized
DEBUG - 2018-08-11 15:57:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:57:14 --> Model Class Initialized
DEBUG - 2018-08-11 15:57:14 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 15:57:14 --> Model Class Initialized
INFO - 2018-08-11 15:57:14 --> Model Class Initialized
DEBUG - 2018-08-11 15:57:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 15:57:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 15:57:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 15:57:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 15:57:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 15:57:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 15:57:15 --> Final output sent to browser
DEBUG - 2018-08-11 15:57:15 --> Total execution time: 0.3731
INFO - 2018-08-11 10:57:20 --> Config Class Initialized
INFO - 2018-08-11 10:57:20 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:57:20 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:57:20 --> Utf8 Class Initialized
INFO - 2018-08-11 10:57:20 --> URI Class Initialized
INFO - 2018-08-11 10:57:20 --> Router Class Initialized
INFO - 2018-08-11 10:57:20 --> Output Class Initialized
INFO - 2018-08-11 10:57:20 --> Security Class Initialized
DEBUG - 2018-08-11 10:57:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:57:20 --> Input Class Initialized
INFO - 2018-08-11 10:57:20 --> Language Class Initialized
INFO - 2018-08-11 10:57:20 --> Language Class Initialized
INFO - 2018-08-11 10:57:20 --> Config Class Initialized
INFO - 2018-08-11 10:57:20 --> Loader Class Initialized
INFO - 2018-08-11 10:57:20 --> Helper loaded: security_helper
INFO - 2018-08-11 10:57:20 --> Helper loaded: form_helper
INFO - 2018-08-11 10:57:20 --> Helper loaded: url_helper
INFO - 2018-08-11 10:57:20 --> Helper loaded: global_helper
INFO - 2018-08-11 10:57:20 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:57:20 --> Helper loaded: text_helper
INFO - 2018-08-11 10:57:20 --> Database Driver Class Initialized
INFO - 2018-08-11 10:57:20 --> Model Class Initialized
INFO - 2018-08-11 10:57:20 --> Controller Class Initialized
DEBUG - 2018-08-11 10:57:20 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:57:20 --> Email Class Initialized
INFO - 2018-08-11 10:57:20 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:57:20 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:57:20 --> Helper loaded: language_helper
INFO - 2018-08-11 10:57:20 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:57:20 --> Model Class Initialized
INFO - 2018-08-11 10:57:20 --> Helper loaded: date_helper
INFO - 2018-08-11 15:57:20 --> Model Class Initialized
INFO - 2018-08-11 15:57:20 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:57:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:57:20 --> Model Class Initialized
ERROR - 2018-08-11 15:57:21 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 15:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 15:57:21 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 10:57:25 --> Config Class Initialized
INFO - 2018-08-11 10:57:25 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:57:25 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:57:25 --> Utf8 Class Initialized
INFO - 2018-08-11 10:57:25 --> URI Class Initialized
INFO - 2018-08-11 10:57:25 --> Router Class Initialized
INFO - 2018-08-11 10:57:25 --> Output Class Initialized
INFO - 2018-08-11 10:57:25 --> Security Class Initialized
DEBUG - 2018-08-11 10:57:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:57:25 --> Input Class Initialized
INFO - 2018-08-11 10:57:25 --> Language Class Initialized
INFO - 2018-08-11 10:57:25 --> Language Class Initialized
INFO - 2018-08-11 10:57:25 --> Config Class Initialized
INFO - 2018-08-11 10:57:25 --> Loader Class Initialized
INFO - 2018-08-11 10:57:25 --> Helper loaded: security_helper
INFO - 2018-08-11 10:57:25 --> Helper loaded: form_helper
INFO - 2018-08-11 10:57:25 --> Helper loaded: url_helper
INFO - 2018-08-11 10:57:25 --> Helper loaded: global_helper
INFO - 2018-08-11 10:57:25 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:57:25 --> Helper loaded: text_helper
INFO - 2018-08-11 10:57:25 --> Database Driver Class Initialized
INFO - 2018-08-11 10:57:25 --> Model Class Initialized
INFO - 2018-08-11 10:57:25 --> Controller Class Initialized
DEBUG - 2018-08-11 10:57:25 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:57:25 --> Email Class Initialized
INFO - 2018-08-11 10:57:25 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:57:25 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:57:25 --> Helper loaded: language_helper
INFO - 2018-08-11 10:57:25 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:57:25 --> Model Class Initialized
INFO - 2018-08-11 10:57:25 --> Helper loaded: date_helper
INFO - 2018-08-11 15:57:25 --> Model Class Initialized
INFO - 2018-08-11 15:57:25 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:57:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:57:27 --> Config Class Initialized
INFO - 2018-08-11 10:57:27 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:57:27 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:57:27 --> Utf8 Class Initialized
INFO - 2018-08-11 10:57:27 --> URI Class Initialized
DEBUG - 2018-08-11 10:57:27 --> No URI present. Default controller set.
INFO - 2018-08-11 10:57:27 --> Router Class Initialized
INFO - 2018-08-11 10:57:27 --> Output Class Initialized
INFO - 2018-08-11 10:57:27 --> Security Class Initialized
DEBUG - 2018-08-11 10:57:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:57:27 --> Input Class Initialized
INFO - 2018-08-11 10:57:27 --> Language Class Initialized
INFO - 2018-08-11 10:57:27 --> Language Class Initialized
INFO - 2018-08-11 10:57:27 --> Config Class Initialized
INFO - 2018-08-11 10:57:27 --> Loader Class Initialized
INFO - 2018-08-11 10:57:27 --> Helper loaded: security_helper
INFO - 2018-08-11 10:57:27 --> Helper loaded: form_helper
INFO - 2018-08-11 10:57:27 --> Helper loaded: url_helper
INFO - 2018-08-11 10:57:27 --> Helper loaded: global_helper
INFO - 2018-08-11 10:57:27 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:57:27 --> Helper loaded: text_helper
INFO - 2018-08-11 10:57:27 --> Database Driver Class Initialized
INFO - 2018-08-11 10:57:27 --> Model Class Initialized
INFO - 2018-08-11 10:57:27 --> Controller Class Initialized
DEBUG - 2018-08-11 10:57:27 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:57:27 --> Email Class Initialized
INFO - 2018-08-11 10:57:27 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:57:27 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:57:27 --> Helper loaded: language_helper
INFO - 2018-08-11 10:57:27 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:57:27 --> Model Class Initialized
INFO - 2018-08-11 10:57:27 --> Helper loaded: date_helper
INFO - 2018-08-11 15:57:27 --> Model Class Initialized
INFO - 2018-08-11 15:57:27 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:57:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:57:27 --> Model Class Initialized
DEBUG - 2018-08-11 15:57:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:57:32 --> Config Class Initialized
INFO - 2018-08-11 10:57:32 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:57:32 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:57:32 --> Utf8 Class Initialized
INFO - 2018-08-11 10:57:32 --> URI Class Initialized
INFO - 2018-08-11 10:57:32 --> Router Class Initialized
INFO - 2018-08-11 10:57:32 --> Output Class Initialized
INFO - 2018-08-11 10:57:32 --> Security Class Initialized
DEBUG - 2018-08-11 10:57:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:57:32 --> Input Class Initialized
INFO - 2018-08-11 10:57:32 --> Language Class Initialized
INFO - 2018-08-11 10:57:32 --> Language Class Initialized
INFO - 2018-08-11 10:57:32 --> Config Class Initialized
INFO - 2018-08-11 10:57:32 --> Loader Class Initialized
INFO - 2018-08-11 10:57:32 --> Helper loaded: security_helper
INFO - 2018-08-11 10:57:32 --> Helper loaded: form_helper
INFO - 2018-08-11 10:57:32 --> Helper loaded: url_helper
INFO - 2018-08-11 10:57:32 --> Helper loaded: global_helper
INFO - 2018-08-11 10:57:32 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:57:32 --> Helper loaded: text_helper
INFO - 2018-08-11 10:57:32 --> Database Driver Class Initialized
INFO - 2018-08-11 10:57:32 --> Model Class Initialized
INFO - 2018-08-11 10:57:32 --> Controller Class Initialized
DEBUG - 2018-08-11 10:57:32 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:57:32 --> Email Class Initialized
INFO - 2018-08-11 10:57:32 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:57:32 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:57:32 --> Helper loaded: language_helper
INFO - 2018-08-11 10:57:32 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:57:32 --> Model Class Initialized
INFO - 2018-08-11 10:57:32 --> Helper loaded: date_helper
INFO - 2018-08-11 15:57:32 --> Model Class Initialized
INFO - 2018-08-11 15:57:32 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:57:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:57:36 --> Config Class Initialized
INFO - 2018-08-11 10:57:36 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:57:36 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:57:36 --> Utf8 Class Initialized
INFO - 2018-08-11 10:57:36 --> URI Class Initialized
INFO - 2018-08-11 10:57:36 --> Router Class Initialized
INFO - 2018-08-11 10:57:36 --> Output Class Initialized
INFO - 2018-08-11 10:57:36 --> Security Class Initialized
DEBUG - 2018-08-11 10:57:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:57:36 --> Input Class Initialized
INFO - 2018-08-11 10:57:36 --> Language Class Initialized
INFO - 2018-08-11 10:57:36 --> Language Class Initialized
INFO - 2018-08-11 10:57:36 --> Config Class Initialized
INFO - 2018-08-11 10:57:36 --> Loader Class Initialized
INFO - 2018-08-11 10:57:36 --> Helper loaded: security_helper
INFO - 2018-08-11 10:57:36 --> Helper loaded: form_helper
INFO - 2018-08-11 10:57:36 --> Helper loaded: url_helper
INFO - 2018-08-11 10:57:36 --> Helper loaded: global_helper
INFO - 2018-08-11 10:57:36 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:57:36 --> Helper loaded: text_helper
INFO - 2018-08-11 10:57:36 --> Database Driver Class Initialized
INFO - 2018-08-11 10:57:36 --> Model Class Initialized
INFO - 2018-08-11 10:57:36 --> Controller Class Initialized
DEBUG - 2018-08-11 10:57:36 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:57:36 --> Email Class Initialized
INFO - 2018-08-11 10:57:36 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:57:36 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:57:36 --> Helper loaded: language_helper
INFO - 2018-08-11 10:57:37 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:57:37 --> Model Class Initialized
INFO - 2018-08-11 10:57:37 --> Helper loaded: date_helper
INFO - 2018-08-11 15:57:37 --> Model Class Initialized
INFO - 2018-08-11 15:57:37 --> Form Validation Class Initialized
DEBUG - 2018-08-11 15:57:37 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 10:58:07 --> Config Class Initialized
INFO - 2018-08-11 10:58:07 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:58:07 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:58:07 --> Utf8 Class Initialized
INFO - 2018-08-11 10:58:07 --> URI Class Initialized
INFO - 2018-08-11 10:58:07 --> Router Class Initialized
INFO - 2018-08-11 10:58:07 --> Output Class Initialized
INFO - 2018-08-11 10:58:07 --> Security Class Initialized
DEBUG - 2018-08-11 10:58:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:58:07 --> Input Class Initialized
INFO - 2018-08-11 10:58:07 --> Language Class Initialized
INFO - 2018-08-11 10:58:07 --> Language Class Initialized
INFO - 2018-08-11 10:58:07 --> Config Class Initialized
INFO - 2018-08-11 10:58:07 --> Loader Class Initialized
INFO - 2018-08-11 10:58:07 --> Helper loaded: security_helper
INFO - 2018-08-11 10:58:07 --> Helper loaded: form_helper
INFO - 2018-08-11 10:58:07 --> Helper loaded: url_helper
INFO - 2018-08-11 10:58:07 --> Helper loaded: global_helper
INFO - 2018-08-11 10:58:07 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:58:07 --> Helper loaded: text_helper
INFO - 2018-08-11 10:58:07 --> Database Driver Class Initialized
INFO - 2018-08-11 10:58:08 --> Model Class Initialized
INFO - 2018-08-11 10:58:08 --> Controller Class Initialized
DEBUG - 2018-08-11 10:58:08 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:58:08 --> Email Class Initialized
INFO - 2018-08-11 10:58:08 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:58:08 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:58:08 --> Helper loaded: language_helper
INFO - 2018-08-11 10:58:08 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:58:08 --> Model Class Initialized
INFO - 2018-08-11 10:58:08 --> Helper loaded: date_helper
INFO - 2018-08-11 15:58:08 --> Form Validation Class Initialized
INFO - 2018-08-11 15:58:08 --> Model Class Initialized
DEBUG - 2018-08-11 15:58:08 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 15:58:08 --> Model Class Initialized
INFO - 2018-08-11 15:58:08 --> Model Class Initialized
DEBUG - 2018-08-11 15:58:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 15:58:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 15:58:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:58:08 --> Model Class Initialized
DEBUG - 2018-08-11 15:58:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 15:58:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 15:58:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 15:58:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 15:58:08 --> Final output sent to browser
DEBUG - 2018-08-11 15:58:08 --> Total execution time: 0.1869
INFO - 2018-08-11 10:58:12 --> Config Class Initialized
INFO - 2018-08-11 10:58:12 --> Hooks Class Initialized
DEBUG - 2018-08-11 10:58:12 --> UTF-8 Support Enabled
INFO - 2018-08-11 10:58:12 --> Utf8 Class Initialized
INFO - 2018-08-11 10:58:12 --> URI Class Initialized
INFO - 2018-08-11 10:58:12 --> Router Class Initialized
INFO - 2018-08-11 10:58:12 --> Output Class Initialized
INFO - 2018-08-11 10:58:12 --> Security Class Initialized
DEBUG - 2018-08-11 10:58:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 10:58:12 --> Input Class Initialized
INFO - 2018-08-11 10:58:12 --> Language Class Initialized
INFO - 2018-08-11 10:58:12 --> Language Class Initialized
INFO - 2018-08-11 10:58:12 --> Config Class Initialized
INFO - 2018-08-11 10:58:12 --> Loader Class Initialized
INFO - 2018-08-11 10:58:12 --> Helper loaded: security_helper
INFO - 2018-08-11 10:58:12 --> Helper loaded: form_helper
INFO - 2018-08-11 10:58:12 --> Helper loaded: url_helper
INFO - 2018-08-11 10:58:12 --> Helper loaded: global_helper
INFO - 2018-08-11 10:58:12 --> Helper loaded: inflector_helper
INFO - 2018-08-11 10:58:12 --> Helper loaded: text_helper
INFO - 2018-08-11 10:58:12 --> Database Driver Class Initialized
INFO - 2018-08-11 10:58:12 --> Model Class Initialized
INFO - 2018-08-11 10:58:12 --> Controller Class Initialized
DEBUG - 2018-08-11 10:58:12 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 10:58:12 --> Email Class Initialized
INFO - 2018-08-11 10:58:12 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 10:58:12 --> Helper loaded: cookie_helper
INFO - 2018-08-11 10:58:12 --> Helper loaded: language_helper
INFO - 2018-08-11 10:58:12 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 10:58:12 --> Model Class Initialized
INFO - 2018-08-11 10:58:12 --> Helper loaded: date_helper
INFO - 2018-08-11 15:58:12 --> Form Validation Class Initialized
INFO - 2018-08-11 15:58:12 --> Model Class Initialized
DEBUG - 2018-08-11 15:58:12 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 15:58:12 --> Model Class Initialized
INFO - 2018-08-11 15:58:12 --> Model Class Initialized
DEBUG - 2018-08-11 15:58:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 15:58:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 15:58:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 15:58:12 --> Model Class Initialized
DEBUG - 2018-08-11 15:58:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 15:58:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 15:58:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 15:58:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 15:58:12 --> Final output sent to browser
DEBUG - 2018-08-11 15:58:12 --> Total execution time: 0.2506
INFO - 2018-08-11 11:12:11 --> Config Class Initialized
INFO - 2018-08-11 11:12:11 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:12:11 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:12:11 --> Utf8 Class Initialized
INFO - 2018-08-11 11:12:11 --> URI Class Initialized
INFO - 2018-08-11 11:12:11 --> Router Class Initialized
INFO - 2018-08-11 11:12:11 --> Output Class Initialized
INFO - 2018-08-11 11:12:11 --> Security Class Initialized
DEBUG - 2018-08-11 11:12:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:12:11 --> Input Class Initialized
INFO - 2018-08-11 11:12:11 --> Language Class Initialized
INFO - 2018-08-11 11:12:11 --> Language Class Initialized
INFO - 2018-08-11 11:12:11 --> Config Class Initialized
INFO - 2018-08-11 11:12:11 --> Loader Class Initialized
INFO - 2018-08-11 11:12:11 --> Helper loaded: security_helper
INFO - 2018-08-11 11:12:11 --> Helper loaded: form_helper
INFO - 2018-08-11 11:12:11 --> Helper loaded: url_helper
INFO - 2018-08-11 11:12:11 --> Helper loaded: global_helper
INFO - 2018-08-11 11:12:11 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:12:11 --> Helper loaded: text_helper
INFO - 2018-08-11 11:12:11 --> Database Driver Class Initialized
INFO - 2018-08-11 11:12:11 --> Model Class Initialized
INFO - 2018-08-11 11:12:11 --> Controller Class Initialized
DEBUG - 2018-08-11 11:12:12 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:12:12 --> Email Class Initialized
INFO - 2018-08-11 11:12:12 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:12:12 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:12:12 --> Helper loaded: language_helper
INFO - 2018-08-11 11:12:12 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:12:12 --> Model Class Initialized
INFO - 2018-08-11 11:12:12 --> Helper loaded: date_helper
INFO - 2018-08-11 16:12:12 --> Form Validation Class Initialized
INFO - 2018-08-11 16:12:12 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:12 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 16:12:12 --> Model Class Initialized
INFO - 2018-08-11 16:12:12 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 16:12:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 16:12:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:12:12 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 16:12:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 16:12:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 16:12:12 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 16:12:12 --> Final output sent to browser
DEBUG - 2018-08-11 16:12:12 --> Total execution time: 0.2681
INFO - 2018-08-11 11:12:16 --> Config Class Initialized
INFO - 2018-08-11 11:12:16 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:12:16 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:12:16 --> Utf8 Class Initialized
INFO - 2018-08-11 11:12:16 --> URI Class Initialized
INFO - 2018-08-11 11:12:16 --> Router Class Initialized
INFO - 2018-08-11 11:12:16 --> Output Class Initialized
INFO - 2018-08-11 11:12:16 --> Security Class Initialized
DEBUG - 2018-08-11 11:12:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:12:16 --> Input Class Initialized
INFO - 2018-08-11 11:12:16 --> Language Class Initialized
INFO - 2018-08-11 11:12:16 --> Language Class Initialized
INFO - 2018-08-11 11:12:16 --> Config Class Initialized
INFO - 2018-08-11 11:12:16 --> Loader Class Initialized
INFO - 2018-08-11 11:12:16 --> Helper loaded: security_helper
INFO - 2018-08-11 11:12:16 --> Helper loaded: form_helper
INFO - 2018-08-11 11:12:16 --> Helper loaded: url_helper
INFO - 2018-08-11 11:12:16 --> Helper loaded: global_helper
INFO - 2018-08-11 11:12:16 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:12:16 --> Helper loaded: text_helper
INFO - 2018-08-11 11:12:16 --> Database Driver Class Initialized
INFO - 2018-08-11 11:12:16 --> Model Class Initialized
INFO - 2018-08-11 11:12:16 --> Controller Class Initialized
DEBUG - 2018-08-11 11:12:16 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:12:16 --> Email Class Initialized
INFO - 2018-08-11 11:12:16 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:12:16 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:12:16 --> Helper loaded: language_helper
INFO - 2018-08-11 11:12:16 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:12:16 --> Model Class Initialized
INFO - 2018-08-11 11:12:16 --> Helper loaded: date_helper
INFO - 2018-08-11 16:12:16 --> Model Class Initialized
INFO - 2018-08-11 16:12:16 --> Form Validation Class Initialized
DEBUG - 2018-08-11 16:12:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:12:16 --> Model Class Initialized
ERROR - 2018-08-11 16:12:16 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 16:12:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 16:12:16 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 11:12:18 --> Config Class Initialized
INFO - 2018-08-11 11:12:18 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:12:18 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:12:18 --> Utf8 Class Initialized
INFO - 2018-08-11 11:12:18 --> URI Class Initialized
INFO - 2018-08-11 11:12:18 --> Router Class Initialized
INFO - 2018-08-11 11:12:18 --> Output Class Initialized
INFO - 2018-08-11 11:12:18 --> Security Class Initialized
DEBUG - 2018-08-11 11:12:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:12:18 --> Input Class Initialized
INFO - 2018-08-11 11:12:18 --> Language Class Initialized
INFO - 2018-08-11 11:12:18 --> Language Class Initialized
INFO - 2018-08-11 11:12:18 --> Config Class Initialized
INFO - 2018-08-11 11:12:18 --> Loader Class Initialized
INFO - 2018-08-11 11:12:18 --> Helper loaded: security_helper
INFO - 2018-08-11 11:12:18 --> Helper loaded: form_helper
INFO - 2018-08-11 11:12:18 --> Helper loaded: url_helper
INFO - 2018-08-11 11:12:18 --> Helper loaded: global_helper
INFO - 2018-08-11 11:12:18 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:12:18 --> Helper loaded: text_helper
INFO - 2018-08-11 11:12:18 --> Database Driver Class Initialized
INFO - 2018-08-11 11:12:18 --> Model Class Initialized
INFO - 2018-08-11 11:12:18 --> Controller Class Initialized
DEBUG - 2018-08-11 11:12:18 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:12:18 --> Email Class Initialized
INFO - 2018-08-11 11:12:18 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:12:18 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:12:18 --> Helper loaded: language_helper
INFO - 2018-08-11 11:12:18 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:12:18 --> Model Class Initialized
INFO - 2018-08-11 11:12:18 --> Helper loaded: date_helper
INFO - 2018-08-11 16:12:18 --> Form Validation Class Initialized
INFO - 2018-08-11 16:12:18 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:18 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 16:12:18 --> Model Class Initialized
INFO - 2018-08-11 16:12:18 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 16:12:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 16:12:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:12:19 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 16:12:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 16:12:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 16:12:19 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 16:12:19 --> Final output sent to browser
DEBUG - 2018-08-11 16:12:19 --> Total execution time: 0.1604
INFO - 2018-08-11 11:12:32 --> Config Class Initialized
INFO - 2018-08-11 11:12:32 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:12:32 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:12:32 --> Utf8 Class Initialized
INFO - 2018-08-11 11:12:32 --> URI Class Initialized
INFO - 2018-08-11 11:12:32 --> Router Class Initialized
INFO - 2018-08-11 11:12:32 --> Output Class Initialized
INFO - 2018-08-11 11:12:32 --> Security Class Initialized
DEBUG - 2018-08-11 11:12:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:12:32 --> Input Class Initialized
INFO - 2018-08-11 11:12:32 --> Language Class Initialized
INFO - 2018-08-11 11:12:32 --> Language Class Initialized
INFO - 2018-08-11 11:12:32 --> Config Class Initialized
INFO - 2018-08-11 11:12:32 --> Loader Class Initialized
INFO - 2018-08-11 11:12:32 --> Helper loaded: security_helper
INFO - 2018-08-11 11:12:32 --> Helper loaded: form_helper
INFO - 2018-08-11 11:12:32 --> Helper loaded: url_helper
INFO - 2018-08-11 11:12:32 --> Helper loaded: global_helper
INFO - 2018-08-11 11:12:32 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:12:32 --> Helper loaded: text_helper
INFO - 2018-08-11 11:12:32 --> Database Driver Class Initialized
INFO - 2018-08-11 11:12:32 --> Model Class Initialized
INFO - 2018-08-11 11:12:32 --> Controller Class Initialized
DEBUG - 2018-08-11 11:12:32 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:12:32 --> Email Class Initialized
INFO - 2018-08-11 11:12:32 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:12:32 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:12:32 --> Helper loaded: language_helper
INFO - 2018-08-11 11:12:32 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:12:32 --> Model Class Initialized
INFO - 2018-08-11 11:12:32 --> Helper loaded: date_helper
INFO - 2018-08-11 16:12:32 --> Form Validation Class Initialized
INFO - 2018-08-11 16:12:32 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:12:32 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:32 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 16:12:32 --> Model Class Initialized
INFO - 2018-08-11 16:12:32 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 16:12:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 16:12:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 16:12:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 16:12:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 16:12:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 16:12:32 --> Final output sent to browser
DEBUG - 2018-08-11 16:12:32 --> Total execution time: 0.1743
INFO - 2018-08-11 11:12:34 --> Config Class Initialized
INFO - 2018-08-11 11:12:34 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:12:34 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:12:34 --> Utf8 Class Initialized
INFO - 2018-08-11 11:12:34 --> URI Class Initialized
INFO - 2018-08-11 11:12:34 --> Router Class Initialized
INFO - 2018-08-11 11:12:34 --> Output Class Initialized
INFO - 2018-08-11 11:12:34 --> Security Class Initialized
DEBUG - 2018-08-11 11:12:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:12:34 --> Input Class Initialized
INFO - 2018-08-11 11:12:34 --> Language Class Initialized
INFO - 2018-08-11 11:12:34 --> Language Class Initialized
INFO - 2018-08-11 11:12:34 --> Config Class Initialized
INFO - 2018-08-11 11:12:34 --> Loader Class Initialized
INFO - 2018-08-11 11:12:34 --> Helper loaded: security_helper
INFO - 2018-08-11 11:12:34 --> Helper loaded: form_helper
INFO - 2018-08-11 11:12:34 --> Helper loaded: url_helper
INFO - 2018-08-11 11:12:34 --> Helper loaded: global_helper
INFO - 2018-08-11 11:12:34 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:12:34 --> Helper loaded: text_helper
INFO - 2018-08-11 11:12:34 --> Database Driver Class Initialized
INFO - 2018-08-11 11:12:34 --> Model Class Initialized
INFO - 2018-08-11 11:12:34 --> Controller Class Initialized
DEBUG - 2018-08-11 11:12:35 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:12:35 --> Email Class Initialized
INFO - 2018-08-11 11:12:35 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:12:35 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:12:35 --> Helper loaded: language_helper
INFO - 2018-08-11 11:12:35 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:12:35 --> Model Class Initialized
INFO - 2018-08-11 11:12:35 --> Helper loaded: date_helper
INFO - 2018-08-11 16:12:35 --> Form Validation Class Initialized
INFO - 2018-08-11 16:12:35 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:35 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 16:12:35 --> Model Class Initialized
INFO - 2018-08-11 16:12:35 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 16:12:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 16:12:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:12:35 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 16:12:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 16:12:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 16:12:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 16:12:35 --> Final output sent to browser
DEBUG - 2018-08-11 16:12:35 --> Total execution time: 0.2490
INFO - 2018-08-11 11:12:52 --> Config Class Initialized
INFO - 2018-08-11 11:12:52 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:12:52 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:12:52 --> Utf8 Class Initialized
INFO - 2018-08-11 11:12:52 --> URI Class Initialized
DEBUG - 2018-08-11 11:12:52 --> No URI present. Default controller set.
INFO - 2018-08-11 11:12:52 --> Router Class Initialized
INFO - 2018-08-11 11:12:52 --> Output Class Initialized
INFO - 2018-08-11 11:12:52 --> Security Class Initialized
DEBUG - 2018-08-11 11:12:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:12:52 --> Input Class Initialized
INFO - 2018-08-11 11:12:52 --> Language Class Initialized
INFO - 2018-08-11 11:12:52 --> Language Class Initialized
INFO - 2018-08-11 11:12:52 --> Config Class Initialized
INFO - 2018-08-11 11:12:52 --> Loader Class Initialized
INFO - 2018-08-11 11:12:52 --> Helper loaded: security_helper
INFO - 2018-08-11 11:12:52 --> Helper loaded: form_helper
INFO - 2018-08-11 11:12:52 --> Helper loaded: url_helper
INFO - 2018-08-11 11:12:52 --> Helper loaded: global_helper
INFO - 2018-08-11 11:12:52 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:12:52 --> Helper loaded: text_helper
INFO - 2018-08-11 11:12:52 --> Database Driver Class Initialized
INFO - 2018-08-11 11:12:52 --> Model Class Initialized
INFO - 2018-08-11 11:12:52 --> Controller Class Initialized
DEBUG - 2018-08-11 11:12:52 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:12:52 --> Email Class Initialized
INFO - 2018-08-11 11:12:52 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:12:52 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:12:52 --> Helper loaded: language_helper
INFO - 2018-08-11 11:12:52 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:12:52 --> Model Class Initialized
INFO - 2018-08-11 11:12:52 --> Helper loaded: date_helper
INFO - 2018-08-11 16:12:52 --> Model Class Initialized
INFO - 2018-08-11 16:12:52 --> Form Validation Class Initialized
DEBUG - 2018-08-11 16:12:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:12:52 --> Model Class Initialized
DEBUG - 2018-08-11 16:12:52 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 11:27:17 --> Config Class Initialized
INFO - 2018-08-11 11:27:17 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:27:17 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:27:17 --> Utf8 Class Initialized
INFO - 2018-08-11 11:27:17 --> URI Class Initialized
DEBUG - 2018-08-11 11:27:17 --> No URI present. Default controller set.
INFO - 2018-08-11 11:27:17 --> Router Class Initialized
INFO - 2018-08-11 11:27:17 --> Output Class Initialized
INFO - 2018-08-11 11:27:17 --> Security Class Initialized
DEBUG - 2018-08-11 11:27:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:27:17 --> Input Class Initialized
INFO - 2018-08-11 11:27:17 --> Language Class Initialized
INFO - 2018-08-11 11:27:17 --> Language Class Initialized
INFO - 2018-08-11 11:27:17 --> Config Class Initialized
INFO - 2018-08-11 11:27:17 --> Loader Class Initialized
INFO - 2018-08-11 11:27:17 --> Helper loaded: security_helper
INFO - 2018-08-11 11:27:17 --> Helper loaded: form_helper
INFO - 2018-08-11 11:27:17 --> Helper loaded: url_helper
INFO - 2018-08-11 11:27:17 --> Helper loaded: global_helper
INFO - 2018-08-11 11:27:17 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:27:17 --> Helper loaded: text_helper
INFO - 2018-08-11 11:27:17 --> Database Driver Class Initialized
INFO - 2018-08-11 11:27:17 --> Model Class Initialized
INFO - 2018-08-11 11:27:17 --> Controller Class Initialized
DEBUG - 2018-08-11 11:27:18 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:27:18 --> Email Class Initialized
INFO - 2018-08-11 11:27:18 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:27:18 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:27:18 --> Helper loaded: language_helper
INFO - 2018-08-11 11:27:18 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:27:18 --> Model Class Initialized
INFO - 2018-08-11 11:27:18 --> Helper loaded: date_helper
INFO - 2018-08-11 16:27:18 --> Model Class Initialized
INFO - 2018-08-11 16:27:18 --> Form Validation Class Initialized
DEBUG - 2018-08-11 16:27:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:27:18 --> Model Class Initialized
DEBUG - 2018-08-11 16:27:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 11:27:21 --> Config Class Initialized
INFO - 2018-08-11 11:27:21 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:27:21 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:27:21 --> Utf8 Class Initialized
INFO - 2018-08-11 11:27:21 --> URI Class Initialized
INFO - 2018-08-11 11:27:21 --> Router Class Initialized
INFO - 2018-08-11 11:27:21 --> Output Class Initialized
INFO - 2018-08-11 11:27:21 --> Security Class Initialized
DEBUG - 2018-08-11 11:27:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:27:21 --> Input Class Initialized
INFO - 2018-08-11 11:27:21 --> Language Class Initialized
INFO - 2018-08-11 11:27:21 --> Language Class Initialized
INFO - 2018-08-11 11:27:21 --> Config Class Initialized
INFO - 2018-08-11 11:27:21 --> Loader Class Initialized
INFO - 2018-08-11 11:27:21 --> Helper loaded: security_helper
INFO - 2018-08-11 11:27:21 --> Helper loaded: form_helper
INFO - 2018-08-11 11:27:21 --> Helper loaded: url_helper
INFO - 2018-08-11 11:27:21 --> Helper loaded: global_helper
INFO - 2018-08-11 11:27:21 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:27:21 --> Helper loaded: text_helper
INFO - 2018-08-11 11:27:21 --> Database Driver Class Initialized
INFO - 2018-08-11 11:27:21 --> Model Class Initialized
INFO - 2018-08-11 11:27:21 --> Controller Class Initialized
DEBUG - 2018-08-11 11:27:21 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:27:21 --> Email Class Initialized
INFO - 2018-08-11 11:27:21 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:27:21 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:27:21 --> Helper loaded: language_helper
INFO - 2018-08-11 11:27:21 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:27:21 --> Model Class Initialized
INFO - 2018-08-11 11:27:21 --> Helper loaded: date_helper
INFO - 2018-08-11 16:27:21 --> Model Class Initialized
INFO - 2018-08-11 16:27:21 --> Form Validation Class Initialized
DEBUG - 2018-08-11 16:27:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:27:21 --> Model Class Initialized
ERROR - 2018-08-11 16:27:21 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 16:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 16:27:21 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 11:27:25 --> Config Class Initialized
INFO - 2018-08-11 11:27:25 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:27:25 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:27:25 --> Utf8 Class Initialized
INFO - 2018-08-11 11:27:25 --> URI Class Initialized
DEBUG - 2018-08-11 11:27:25 --> No URI present. Default controller set.
INFO - 2018-08-11 11:27:25 --> Router Class Initialized
INFO - 2018-08-11 11:27:25 --> Output Class Initialized
INFO - 2018-08-11 11:27:25 --> Security Class Initialized
DEBUG - 2018-08-11 11:27:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:27:25 --> Input Class Initialized
INFO - 2018-08-11 11:27:25 --> Language Class Initialized
INFO - 2018-08-11 11:27:25 --> Language Class Initialized
INFO - 2018-08-11 11:27:25 --> Config Class Initialized
INFO - 2018-08-11 11:27:25 --> Loader Class Initialized
INFO - 2018-08-11 11:27:25 --> Helper loaded: security_helper
INFO - 2018-08-11 11:27:25 --> Helper loaded: form_helper
INFO - 2018-08-11 11:27:25 --> Helper loaded: url_helper
INFO - 2018-08-11 11:27:25 --> Helper loaded: global_helper
INFO - 2018-08-11 11:27:25 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:27:25 --> Helper loaded: text_helper
INFO - 2018-08-11 11:27:25 --> Database Driver Class Initialized
INFO - 2018-08-11 11:27:25 --> Model Class Initialized
INFO - 2018-08-11 11:27:25 --> Controller Class Initialized
DEBUG - 2018-08-11 11:27:25 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:27:25 --> Email Class Initialized
INFO - 2018-08-11 11:27:25 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:27:25 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:27:25 --> Helper loaded: language_helper
INFO - 2018-08-11 11:27:25 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:27:25 --> Model Class Initialized
INFO - 2018-08-11 11:27:25 --> Helper loaded: date_helper
INFO - 2018-08-11 16:27:25 --> Model Class Initialized
INFO - 2018-08-11 16:27:25 --> Form Validation Class Initialized
DEBUG - 2018-08-11 16:27:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:27:25 --> Model Class Initialized
DEBUG - 2018-08-11 16:27:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 11:27:27 --> Config Class Initialized
INFO - 2018-08-11 11:27:27 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:27:27 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:27:27 --> Utf8 Class Initialized
INFO - 2018-08-11 11:27:27 --> URI Class Initialized
INFO - 2018-08-11 11:27:27 --> Router Class Initialized
INFO - 2018-08-11 11:27:27 --> Output Class Initialized
INFO - 2018-08-11 11:27:27 --> Security Class Initialized
DEBUG - 2018-08-11 11:27:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:27:27 --> Input Class Initialized
INFO - 2018-08-11 11:27:27 --> Language Class Initialized
INFO - 2018-08-11 11:27:27 --> Language Class Initialized
INFO - 2018-08-11 11:27:27 --> Config Class Initialized
INFO - 2018-08-11 11:27:27 --> Loader Class Initialized
INFO - 2018-08-11 11:27:27 --> Helper loaded: security_helper
INFO - 2018-08-11 11:27:27 --> Helper loaded: form_helper
INFO - 2018-08-11 11:27:27 --> Helper loaded: url_helper
INFO - 2018-08-11 11:27:27 --> Helper loaded: global_helper
INFO - 2018-08-11 11:27:27 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:27:27 --> Helper loaded: text_helper
INFO - 2018-08-11 11:27:27 --> Database Driver Class Initialized
INFO - 2018-08-11 11:27:27 --> Model Class Initialized
INFO - 2018-08-11 11:27:27 --> Controller Class Initialized
DEBUG - 2018-08-11 11:27:27 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:27:27 --> Email Class Initialized
INFO - 2018-08-11 11:27:27 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:27:27 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:27:27 --> Helper loaded: language_helper
INFO - 2018-08-11 11:27:27 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:27:27 --> Model Class Initialized
INFO - 2018-08-11 11:27:27 --> Helper loaded: date_helper
INFO - 2018-08-11 16:27:27 --> Model Class Initialized
INFO - 2018-08-11 16:27:27 --> Form Validation Class Initialized
DEBUG - 2018-08-11 16:27:27 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:27:27 --> Model Class Initialized
DEBUG - 2018-08-11 16:27:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 11:27:32 --> Config Class Initialized
INFO - 2018-08-11 11:27:32 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:27:32 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:27:32 --> Utf8 Class Initialized
INFO - 2018-08-11 11:27:32 --> URI Class Initialized
INFO - 2018-08-11 11:27:32 --> Router Class Initialized
INFO - 2018-08-11 11:27:32 --> Output Class Initialized
INFO - 2018-08-11 11:27:32 --> Security Class Initialized
DEBUG - 2018-08-11 11:27:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:27:32 --> Input Class Initialized
INFO - 2018-08-11 11:27:32 --> Language Class Initialized
INFO - 2018-08-11 11:27:32 --> Language Class Initialized
INFO - 2018-08-11 11:27:32 --> Config Class Initialized
INFO - 2018-08-11 11:27:32 --> Loader Class Initialized
INFO - 2018-08-11 11:27:32 --> Helper loaded: security_helper
INFO - 2018-08-11 11:27:32 --> Helper loaded: form_helper
INFO - 2018-08-11 11:27:32 --> Helper loaded: url_helper
INFO - 2018-08-11 11:27:32 --> Helper loaded: global_helper
INFO - 2018-08-11 11:27:32 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:27:32 --> Helper loaded: text_helper
INFO - 2018-08-11 11:27:32 --> Database Driver Class Initialized
INFO - 2018-08-11 11:27:32 --> Model Class Initialized
INFO - 2018-08-11 11:27:32 --> Controller Class Initialized
DEBUG - 2018-08-11 11:27:32 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:27:32 --> Email Class Initialized
INFO - 2018-08-11 11:27:32 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:27:32 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:27:32 --> Helper loaded: language_helper
INFO - 2018-08-11 11:27:32 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:27:32 --> Model Class Initialized
INFO - 2018-08-11 11:27:32 --> Helper loaded: date_helper
INFO - 2018-08-11 16:27:32 --> Model Class Initialized
INFO - 2018-08-11 16:27:32 --> Form Validation Class Initialized
DEBUG - 2018-08-11 16:27:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:27:32 --> Model Class Initialized
ERROR - 2018-08-11 16:27:32 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 16:27:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 16:27:32 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 11:27:35 --> Config Class Initialized
INFO - 2018-08-11 11:27:35 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:27:35 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:27:35 --> Utf8 Class Initialized
INFO - 2018-08-11 11:27:35 --> URI Class Initialized
INFO - 2018-08-11 11:27:35 --> Router Class Initialized
INFO - 2018-08-11 11:27:35 --> Output Class Initialized
INFO - 2018-08-11 11:27:35 --> Security Class Initialized
DEBUG - 2018-08-11 11:27:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:27:35 --> Input Class Initialized
INFO - 2018-08-11 11:27:35 --> Language Class Initialized
INFO - 2018-08-11 11:27:35 --> Language Class Initialized
INFO - 2018-08-11 11:27:35 --> Config Class Initialized
INFO - 2018-08-11 11:27:35 --> Loader Class Initialized
INFO - 2018-08-11 11:27:35 --> Helper loaded: security_helper
INFO - 2018-08-11 11:27:35 --> Helper loaded: form_helper
INFO - 2018-08-11 11:27:35 --> Helper loaded: url_helper
INFO - 2018-08-11 11:27:35 --> Helper loaded: global_helper
INFO - 2018-08-11 11:27:35 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:27:35 --> Helper loaded: text_helper
INFO - 2018-08-11 11:27:35 --> Database Driver Class Initialized
INFO - 2018-08-11 11:27:35 --> Model Class Initialized
INFO - 2018-08-11 11:27:35 --> Controller Class Initialized
DEBUG - 2018-08-11 11:27:35 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:27:35 --> Email Class Initialized
INFO - 2018-08-11 11:27:35 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:27:35 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:27:35 --> Helper loaded: language_helper
INFO - 2018-08-11 11:27:35 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:27:35 --> Model Class Initialized
INFO - 2018-08-11 11:27:35 --> Helper loaded: date_helper
INFO - 2018-08-11 16:27:35 --> Model Class Initialized
INFO - 2018-08-11 16:27:35 --> Form Validation Class Initialized
DEBUG - 2018-08-11 16:27:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:27:35 --> Model Class Initialized
DEBUG - 2018-08-11 16:27:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 11:27:39 --> Config Class Initialized
INFO - 2018-08-11 11:27:39 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:27:39 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:27:39 --> Utf8 Class Initialized
INFO - 2018-08-11 11:27:39 --> URI Class Initialized
INFO - 2018-08-11 11:27:39 --> Router Class Initialized
INFO - 2018-08-11 11:27:39 --> Output Class Initialized
INFO - 2018-08-11 11:27:39 --> Security Class Initialized
DEBUG - 2018-08-11 11:27:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:27:39 --> Input Class Initialized
INFO - 2018-08-11 11:27:39 --> Language Class Initialized
INFO - 2018-08-11 11:27:39 --> Language Class Initialized
INFO - 2018-08-11 11:27:39 --> Config Class Initialized
INFO - 2018-08-11 11:27:39 --> Loader Class Initialized
INFO - 2018-08-11 11:27:39 --> Helper loaded: security_helper
INFO - 2018-08-11 11:27:39 --> Helper loaded: form_helper
INFO - 2018-08-11 11:27:39 --> Helper loaded: url_helper
INFO - 2018-08-11 11:27:39 --> Helper loaded: global_helper
INFO - 2018-08-11 11:27:39 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:27:39 --> Helper loaded: text_helper
INFO - 2018-08-11 11:27:39 --> Database Driver Class Initialized
INFO - 2018-08-11 11:27:39 --> Model Class Initialized
INFO - 2018-08-11 11:27:39 --> Controller Class Initialized
DEBUG - 2018-08-11 11:27:39 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:27:39 --> Email Class Initialized
INFO - 2018-08-11 11:27:39 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:27:39 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:27:39 --> Helper loaded: language_helper
INFO - 2018-08-11 11:27:39 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:27:39 --> Model Class Initialized
INFO - 2018-08-11 11:27:39 --> Helper loaded: date_helper
INFO - 2018-08-11 16:27:39 --> Model Class Initialized
INFO - 2018-08-11 16:27:39 --> Form Validation Class Initialized
DEBUG - 2018-08-11 16:27:39 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 11:39:37 --> Config Class Initialized
INFO - 2018-08-11 11:39:37 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:39:37 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:39:37 --> Utf8 Class Initialized
INFO - 2018-08-11 11:39:37 --> URI Class Initialized
INFO - 2018-08-11 11:39:37 --> Router Class Initialized
INFO - 2018-08-11 11:39:37 --> Output Class Initialized
INFO - 2018-08-11 11:39:37 --> Security Class Initialized
DEBUG - 2018-08-11 11:39:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:39:37 --> Input Class Initialized
INFO - 2018-08-11 11:39:37 --> Language Class Initialized
INFO - 2018-08-11 11:39:37 --> Language Class Initialized
INFO - 2018-08-11 11:39:37 --> Config Class Initialized
INFO - 2018-08-11 11:39:37 --> Loader Class Initialized
INFO - 2018-08-11 11:39:37 --> Helper loaded: security_helper
INFO - 2018-08-11 11:39:37 --> Helper loaded: form_helper
INFO - 2018-08-11 11:39:37 --> Helper loaded: url_helper
INFO - 2018-08-11 11:39:37 --> Helper loaded: global_helper
INFO - 2018-08-11 11:39:37 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:39:37 --> Helper loaded: text_helper
INFO - 2018-08-11 11:39:37 --> Database Driver Class Initialized
INFO - 2018-08-11 11:39:37 --> Model Class Initialized
INFO - 2018-08-11 11:39:37 --> Controller Class Initialized
DEBUG - 2018-08-11 11:39:37 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:39:37 --> Email Class Initialized
INFO - 2018-08-11 11:39:37 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:39:37 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:39:37 --> Helper loaded: language_helper
INFO - 2018-08-11 11:39:37 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:39:37 --> Model Class Initialized
INFO - 2018-08-11 11:39:37 --> Helper loaded: date_helper
INFO - 2018-08-11 16:39:37 --> Form Validation Class Initialized
INFO - 2018-08-11 16:39:37 --> Model Class Initialized
DEBUG - 2018-08-11 16:39:37 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 16:39:37 --> Model Class Initialized
DEBUG - 2018-08-11 16:39:37 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 16:39:37 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 16:39:37 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:39:37 --> Model Class Initialized
DEBUG - 2018-08-11 16:39:37 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 16:39:37 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 16:39:37 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 16:39:37 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 16:39:37 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 16:39:37 --> Final output sent to browser
DEBUG - 2018-08-11 16:39:37 --> Total execution time: 0.2465
INFO - 2018-08-11 11:39:56 --> Config Class Initialized
INFO - 2018-08-11 11:39:56 --> Hooks Class Initialized
DEBUG - 2018-08-11 11:39:56 --> UTF-8 Support Enabled
INFO - 2018-08-11 11:39:56 --> Utf8 Class Initialized
INFO - 2018-08-11 11:39:56 --> URI Class Initialized
INFO - 2018-08-11 11:39:56 --> Router Class Initialized
INFO - 2018-08-11 11:39:56 --> Output Class Initialized
INFO - 2018-08-11 11:39:56 --> Security Class Initialized
DEBUG - 2018-08-11 11:39:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 11:39:56 --> Input Class Initialized
INFO - 2018-08-11 11:39:56 --> Language Class Initialized
INFO - 2018-08-11 11:39:56 --> Language Class Initialized
INFO - 2018-08-11 11:39:56 --> Config Class Initialized
INFO - 2018-08-11 11:39:56 --> Loader Class Initialized
INFO - 2018-08-11 11:39:56 --> Helper loaded: security_helper
INFO - 2018-08-11 11:39:56 --> Helper loaded: form_helper
INFO - 2018-08-11 11:39:56 --> Helper loaded: url_helper
INFO - 2018-08-11 11:39:56 --> Helper loaded: global_helper
INFO - 2018-08-11 11:39:56 --> Helper loaded: inflector_helper
INFO - 2018-08-11 11:39:56 --> Helper loaded: text_helper
INFO - 2018-08-11 11:39:56 --> Database Driver Class Initialized
INFO - 2018-08-11 11:39:56 --> Model Class Initialized
INFO - 2018-08-11 11:39:56 --> Controller Class Initialized
DEBUG - 2018-08-11 11:39:56 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 11:39:56 --> Email Class Initialized
INFO - 2018-08-11 11:39:56 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 11:39:56 --> Helper loaded: cookie_helper
INFO - 2018-08-11 11:39:56 --> Helper loaded: language_helper
INFO - 2018-08-11 11:39:56 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 11:39:56 --> Model Class Initialized
INFO - 2018-08-11 11:39:56 --> Helper loaded: date_helper
INFO - 2018-08-11 16:39:56 --> Form Validation Class Initialized
INFO - 2018-08-11 16:39:56 --> Model Class Initialized
DEBUG - 2018-08-11 16:39:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 16:39:56 --> Model Class Initialized
DEBUG - 2018-08-11 16:39:56 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 16:39:56 --> Model Class Initialized
INFO - 2018-08-11 16:39:56 --> Model Class Initialized
DEBUG - 2018-08-11 16:39:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 16:39:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 16:39:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 16:39:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 16:39:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 16:39:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 16:39:56 --> Final output sent to browser
DEBUG - 2018-08-11 16:39:56 --> Total execution time: 0.1748
INFO - 2018-08-11 12:00:08 --> Config Class Initialized
INFO - 2018-08-11 12:00:08 --> Hooks Class Initialized
DEBUG - 2018-08-11 12:00:08 --> UTF-8 Support Enabled
INFO - 2018-08-11 12:00:08 --> Utf8 Class Initialized
INFO - 2018-08-11 12:00:08 --> URI Class Initialized
DEBUG - 2018-08-11 12:00:08 --> No URI present. Default controller set.
INFO - 2018-08-11 12:00:08 --> Router Class Initialized
INFO - 2018-08-11 12:00:08 --> Output Class Initialized
INFO - 2018-08-11 12:00:08 --> Security Class Initialized
DEBUG - 2018-08-11 12:00:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 12:00:08 --> Input Class Initialized
INFO - 2018-08-11 12:00:08 --> Language Class Initialized
INFO - 2018-08-11 12:00:08 --> Language Class Initialized
INFO - 2018-08-11 12:00:08 --> Config Class Initialized
INFO - 2018-08-11 12:00:08 --> Loader Class Initialized
INFO - 2018-08-11 12:00:08 --> Helper loaded: security_helper
INFO - 2018-08-11 12:00:08 --> Helper loaded: form_helper
INFO - 2018-08-11 12:00:08 --> Helper loaded: url_helper
INFO - 2018-08-11 12:00:08 --> Helper loaded: global_helper
INFO - 2018-08-11 12:00:08 --> Helper loaded: inflector_helper
INFO - 2018-08-11 12:00:08 --> Helper loaded: text_helper
INFO - 2018-08-11 12:00:08 --> Database Driver Class Initialized
INFO - 2018-08-11 12:00:08 --> Model Class Initialized
INFO - 2018-08-11 12:00:08 --> Controller Class Initialized
DEBUG - 2018-08-11 12:00:08 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 12:00:08 --> Email Class Initialized
INFO - 2018-08-11 12:00:08 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 12:00:08 --> Helper loaded: cookie_helper
INFO - 2018-08-11 12:00:08 --> Helper loaded: language_helper
INFO - 2018-08-11 12:00:08 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 12:00:08 --> Model Class Initialized
INFO - 2018-08-11 12:00:08 --> Helper loaded: date_helper
INFO - 2018-08-11 17:00:08 --> Model Class Initialized
INFO - 2018-08-11 17:00:08 --> Form Validation Class Initialized
DEBUG - 2018-08-11 17:00:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 17:00:08 --> Model Class Initialized
DEBUG - 2018-08-11 17:00:09 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 12:00:11 --> Config Class Initialized
INFO - 2018-08-11 12:00:11 --> Hooks Class Initialized
DEBUG - 2018-08-11 12:00:11 --> UTF-8 Support Enabled
INFO - 2018-08-11 12:00:11 --> Utf8 Class Initialized
INFO - 2018-08-11 12:00:11 --> URI Class Initialized
INFO - 2018-08-11 12:00:11 --> Router Class Initialized
INFO - 2018-08-11 12:00:11 --> Output Class Initialized
INFO - 2018-08-11 12:00:11 --> Security Class Initialized
DEBUG - 2018-08-11 12:00:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 12:00:11 --> Input Class Initialized
INFO - 2018-08-11 12:00:11 --> Language Class Initialized
INFO - 2018-08-11 12:00:11 --> Language Class Initialized
INFO - 2018-08-11 12:00:11 --> Config Class Initialized
INFO - 2018-08-11 12:00:11 --> Loader Class Initialized
INFO - 2018-08-11 12:00:11 --> Helper loaded: security_helper
INFO - 2018-08-11 12:00:11 --> Helper loaded: form_helper
INFO - 2018-08-11 12:00:11 --> Helper loaded: url_helper
INFO - 2018-08-11 12:00:11 --> Helper loaded: global_helper
INFO - 2018-08-11 12:00:11 --> Helper loaded: inflector_helper
INFO - 2018-08-11 12:00:11 --> Helper loaded: text_helper
INFO - 2018-08-11 12:00:11 --> Database Driver Class Initialized
INFO - 2018-08-11 12:00:11 --> Model Class Initialized
INFO - 2018-08-11 12:00:11 --> Controller Class Initialized
DEBUG - 2018-08-11 12:00:11 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 12:00:11 --> Email Class Initialized
INFO - 2018-08-11 12:00:11 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 12:00:11 --> Helper loaded: cookie_helper
INFO - 2018-08-11 12:00:11 --> Helper loaded: language_helper
INFO - 2018-08-11 12:00:11 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 12:00:11 --> Model Class Initialized
INFO - 2018-08-11 12:00:11 --> Helper loaded: date_helper
INFO - 2018-08-11 17:00:11 --> Model Class Initialized
INFO - 2018-08-11 17:00:11 --> Form Validation Class Initialized
DEBUG - 2018-08-11 17:00:11 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 17:00:11 --> Model Class Initialized
ERROR - 2018-08-11 17:00:11 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 17:00:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 17:00:11 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 12:00:14 --> Config Class Initialized
INFO - 2018-08-11 12:00:14 --> Hooks Class Initialized
DEBUG - 2018-08-11 12:00:14 --> UTF-8 Support Enabled
INFO - 2018-08-11 12:00:14 --> Utf8 Class Initialized
INFO - 2018-08-11 12:00:14 --> URI Class Initialized
DEBUG - 2018-08-11 12:00:14 --> No URI present. Default controller set.
INFO - 2018-08-11 12:00:14 --> Router Class Initialized
INFO - 2018-08-11 12:00:14 --> Output Class Initialized
INFO - 2018-08-11 12:00:14 --> Security Class Initialized
DEBUG - 2018-08-11 12:00:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 12:00:14 --> Input Class Initialized
INFO - 2018-08-11 12:00:14 --> Language Class Initialized
INFO - 2018-08-11 12:00:14 --> Language Class Initialized
INFO - 2018-08-11 12:00:14 --> Config Class Initialized
INFO - 2018-08-11 12:00:14 --> Loader Class Initialized
INFO - 2018-08-11 12:00:14 --> Helper loaded: security_helper
INFO - 2018-08-11 12:00:14 --> Helper loaded: form_helper
INFO - 2018-08-11 12:00:14 --> Helper loaded: url_helper
INFO - 2018-08-11 12:00:14 --> Helper loaded: global_helper
INFO - 2018-08-11 12:00:14 --> Helper loaded: inflector_helper
INFO - 2018-08-11 12:00:14 --> Helper loaded: text_helper
INFO - 2018-08-11 12:00:14 --> Database Driver Class Initialized
INFO - 2018-08-11 12:00:14 --> Model Class Initialized
INFO - 2018-08-11 12:00:14 --> Controller Class Initialized
DEBUG - 2018-08-11 12:00:14 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 12:00:14 --> Email Class Initialized
INFO - 2018-08-11 12:00:14 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 12:00:14 --> Helper loaded: cookie_helper
INFO - 2018-08-11 12:00:14 --> Helper loaded: language_helper
INFO - 2018-08-11 12:00:14 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 12:00:14 --> Model Class Initialized
INFO - 2018-08-11 12:00:14 --> Helper loaded: date_helper
INFO - 2018-08-11 17:00:14 --> Model Class Initialized
INFO - 2018-08-11 17:00:14 --> Form Validation Class Initialized
DEBUG - 2018-08-11 17:00:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 17:00:14 --> Model Class Initialized
DEBUG - 2018-08-11 17:00:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 12:00:15 --> Config Class Initialized
INFO - 2018-08-11 12:00:15 --> Hooks Class Initialized
DEBUG - 2018-08-11 12:00:15 --> UTF-8 Support Enabled
INFO - 2018-08-11 12:00:15 --> Utf8 Class Initialized
INFO - 2018-08-11 12:00:15 --> URI Class Initialized
DEBUG - 2018-08-11 12:00:15 --> No URI present. Default controller set.
INFO - 2018-08-11 12:00:15 --> Router Class Initialized
INFO - 2018-08-11 12:00:15 --> Output Class Initialized
INFO - 2018-08-11 12:00:15 --> Security Class Initialized
DEBUG - 2018-08-11 12:00:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 12:00:15 --> Input Class Initialized
INFO - 2018-08-11 12:00:15 --> Language Class Initialized
INFO - 2018-08-11 12:00:15 --> Language Class Initialized
INFO - 2018-08-11 12:00:15 --> Config Class Initialized
INFO - 2018-08-11 12:00:15 --> Loader Class Initialized
INFO - 2018-08-11 12:00:15 --> Helper loaded: security_helper
INFO - 2018-08-11 12:00:15 --> Helper loaded: form_helper
INFO - 2018-08-11 12:00:15 --> Helper loaded: url_helper
INFO - 2018-08-11 12:00:15 --> Helper loaded: global_helper
INFO - 2018-08-11 12:00:15 --> Helper loaded: inflector_helper
INFO - 2018-08-11 12:00:15 --> Helper loaded: text_helper
INFO - 2018-08-11 12:00:15 --> Database Driver Class Initialized
INFO - 2018-08-11 12:00:15 --> Model Class Initialized
INFO - 2018-08-11 12:00:15 --> Controller Class Initialized
DEBUG - 2018-08-11 12:00:15 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 12:00:15 --> Email Class Initialized
INFO - 2018-08-11 12:00:15 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 12:00:15 --> Helper loaded: cookie_helper
INFO - 2018-08-11 12:00:15 --> Helper loaded: language_helper
INFO - 2018-08-11 12:00:15 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 12:00:15 --> Model Class Initialized
INFO - 2018-08-11 12:00:15 --> Helper loaded: date_helper
INFO - 2018-08-11 17:00:15 --> Model Class Initialized
INFO - 2018-08-11 17:00:15 --> Form Validation Class Initialized
DEBUG - 2018-08-11 17:00:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 17:00:15 --> Model Class Initialized
DEBUG - 2018-08-11 17:00:15 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 12:53:46 --> Config Class Initialized
INFO - 2018-08-11 12:53:46 --> Hooks Class Initialized
DEBUG - 2018-08-11 12:53:46 --> UTF-8 Support Enabled
INFO - 2018-08-11 12:53:46 --> Utf8 Class Initialized
INFO - 2018-08-11 12:53:46 --> URI Class Initialized
DEBUG - 2018-08-11 12:53:46 --> No URI present. Default controller set.
INFO - 2018-08-11 12:53:46 --> Router Class Initialized
INFO - 2018-08-11 12:53:46 --> Output Class Initialized
INFO - 2018-08-11 12:53:46 --> Security Class Initialized
DEBUG - 2018-08-11 12:53:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 12:53:46 --> Input Class Initialized
INFO - 2018-08-11 12:53:46 --> Language Class Initialized
INFO - 2018-08-11 12:53:46 --> Language Class Initialized
INFO - 2018-08-11 12:53:46 --> Config Class Initialized
INFO - 2018-08-11 12:53:46 --> Loader Class Initialized
INFO - 2018-08-11 12:53:46 --> Helper loaded: security_helper
INFO - 2018-08-11 12:53:46 --> Helper loaded: form_helper
INFO - 2018-08-11 12:53:46 --> Helper loaded: url_helper
INFO - 2018-08-11 12:53:46 --> Helper loaded: global_helper
INFO - 2018-08-11 12:53:46 --> Helper loaded: inflector_helper
INFO - 2018-08-11 12:53:46 --> Helper loaded: text_helper
INFO - 2018-08-11 12:53:46 --> Database Driver Class Initialized
INFO - 2018-08-11 12:53:46 --> Model Class Initialized
INFO - 2018-08-11 12:53:46 --> Controller Class Initialized
DEBUG - 2018-08-11 12:53:46 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 12:53:46 --> Email Class Initialized
INFO - 2018-08-11 12:53:46 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 12:53:46 --> Helper loaded: cookie_helper
INFO - 2018-08-11 12:53:46 --> Helper loaded: language_helper
INFO - 2018-08-11 12:53:46 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 12:53:46 --> Model Class Initialized
INFO - 2018-08-11 12:53:46 --> Helper loaded: date_helper
INFO - 2018-08-11 17:53:46 --> Model Class Initialized
INFO - 2018-08-11 17:53:46 --> Form Validation Class Initialized
DEBUG - 2018-08-11 17:53:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 17:53:46 --> Model Class Initialized
DEBUG - 2018-08-11 17:53:46 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 12:53:48 --> Config Class Initialized
INFO - 2018-08-11 12:53:48 --> Hooks Class Initialized
DEBUG - 2018-08-11 12:53:48 --> UTF-8 Support Enabled
INFO - 2018-08-11 12:53:48 --> Utf8 Class Initialized
INFO - 2018-08-11 12:53:48 --> URI Class Initialized
INFO - 2018-08-11 12:53:48 --> Router Class Initialized
INFO - 2018-08-11 12:53:48 --> Output Class Initialized
INFO - 2018-08-11 12:53:48 --> Security Class Initialized
DEBUG - 2018-08-11 12:53:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 12:53:48 --> Input Class Initialized
INFO - 2018-08-11 12:53:48 --> Language Class Initialized
INFO - 2018-08-11 12:53:48 --> Language Class Initialized
INFO - 2018-08-11 12:53:48 --> Config Class Initialized
INFO - 2018-08-11 12:53:48 --> Loader Class Initialized
INFO - 2018-08-11 12:53:48 --> Helper loaded: security_helper
INFO - 2018-08-11 12:53:48 --> Helper loaded: form_helper
INFO - 2018-08-11 12:53:48 --> Helper loaded: url_helper
INFO - 2018-08-11 12:53:48 --> Helper loaded: global_helper
INFO - 2018-08-11 12:53:48 --> Helper loaded: inflector_helper
INFO - 2018-08-11 12:53:48 --> Helper loaded: text_helper
INFO - 2018-08-11 12:53:48 --> Database Driver Class Initialized
INFO - 2018-08-11 12:53:48 --> Model Class Initialized
INFO - 2018-08-11 12:53:48 --> Controller Class Initialized
DEBUG - 2018-08-11 12:53:48 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 12:53:48 --> Email Class Initialized
INFO - 2018-08-11 12:53:48 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 12:53:48 --> Helper loaded: cookie_helper
INFO - 2018-08-11 12:53:48 --> Helper loaded: language_helper
INFO - 2018-08-11 12:53:48 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 12:53:48 --> Model Class Initialized
INFO - 2018-08-11 12:53:48 --> Helper loaded: date_helper
INFO - 2018-08-11 17:53:48 --> Model Class Initialized
INFO - 2018-08-11 17:53:48 --> Form Validation Class Initialized
DEBUG - 2018-08-11 17:53:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 17:53:48 --> Model Class Initialized
ERROR - 2018-08-11 17:53:49 --> Severity: Notice --> Undefined variable: course_id /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/models/Home_model.php 447
ERROR - 2018-08-11 17:53:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC' at line 10 - Invalid query: SELECT u.* FROM pre_users u 
	    			INNER JOIN pre_users_groups ug ON ug.user_id=u.id 
	    			 
	    			 INNER JOIN pre_tutor_courses tl ON tl.tutor_id=u.id  
	    			 
					WHERE u.active=1 AND u.visibility_in_search='1' 
                    AND u.is_profile_update=1 AND (u.parent_id=0 OR u.parent_id='') AND ug.group_id=3 
					 
					 
					 AND tl.course_id IN ()  
					 
					GROUP BY u.id ORDER BY u.net_credits DESC  
INFO - 2018-08-11 17:53:49 --> Language file loaded: language/english/db_lang.php
INFO - 2018-08-11 12:53:51 --> Config Class Initialized
INFO - 2018-08-11 12:53:51 --> Hooks Class Initialized
DEBUG - 2018-08-11 12:53:51 --> UTF-8 Support Enabled
INFO - 2018-08-11 12:53:51 --> Utf8 Class Initialized
INFO - 2018-08-11 12:53:51 --> URI Class Initialized
DEBUG - 2018-08-11 12:53:51 --> No URI present. Default controller set.
INFO - 2018-08-11 12:53:51 --> Router Class Initialized
INFO - 2018-08-11 12:53:51 --> Output Class Initialized
INFO - 2018-08-11 12:53:51 --> Security Class Initialized
DEBUG - 2018-08-11 12:53:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 12:53:51 --> Input Class Initialized
INFO - 2018-08-11 12:53:51 --> Language Class Initialized
INFO - 2018-08-11 12:53:51 --> Language Class Initialized
INFO - 2018-08-11 12:53:51 --> Config Class Initialized
INFO - 2018-08-11 12:53:51 --> Loader Class Initialized
INFO - 2018-08-11 12:53:51 --> Helper loaded: security_helper
INFO - 2018-08-11 12:53:51 --> Helper loaded: form_helper
INFO - 2018-08-11 12:53:51 --> Helper loaded: url_helper
INFO - 2018-08-11 12:53:51 --> Helper loaded: global_helper
INFO - 2018-08-11 12:53:51 --> Helper loaded: inflector_helper
INFO - 2018-08-11 12:53:51 --> Helper loaded: text_helper
INFO - 2018-08-11 12:53:51 --> Database Driver Class Initialized
INFO - 2018-08-11 12:53:51 --> Model Class Initialized
INFO - 2018-08-11 12:53:51 --> Controller Class Initialized
DEBUG - 2018-08-11 12:53:51 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 12:53:51 --> Email Class Initialized
INFO - 2018-08-11 12:53:51 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 12:53:51 --> Helper loaded: cookie_helper
INFO - 2018-08-11 12:53:51 --> Helper loaded: language_helper
INFO - 2018-08-11 12:53:51 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 12:53:51 --> Model Class Initialized
INFO - 2018-08-11 12:53:51 --> Helper loaded: date_helper
INFO - 2018-08-11 17:53:51 --> Model Class Initialized
INFO - 2018-08-11 17:53:51 --> Form Validation Class Initialized
DEBUG - 2018-08-11 17:53:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 17:53:51 --> Model Class Initialized
DEBUG - 2018-08-11 17:53:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 12:53:53 --> Config Class Initialized
INFO - 2018-08-11 12:53:53 --> Hooks Class Initialized
DEBUG - 2018-08-11 12:53:53 --> UTF-8 Support Enabled
INFO - 2018-08-11 12:53:53 --> Utf8 Class Initialized
INFO - 2018-08-11 12:53:53 --> URI Class Initialized
INFO - 2018-08-11 12:53:53 --> Router Class Initialized
INFO - 2018-08-11 12:53:53 --> Output Class Initialized
INFO - 2018-08-11 12:53:53 --> Security Class Initialized
DEBUG - 2018-08-11 12:53:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 12:53:53 --> Input Class Initialized
INFO - 2018-08-11 12:53:53 --> Language Class Initialized
INFO - 2018-08-11 12:53:53 --> Language Class Initialized
INFO - 2018-08-11 12:53:53 --> Config Class Initialized
INFO - 2018-08-11 12:53:53 --> Loader Class Initialized
INFO - 2018-08-11 12:53:53 --> Helper loaded: security_helper
INFO - 2018-08-11 12:53:53 --> Helper loaded: form_helper
INFO - 2018-08-11 12:53:53 --> Helper loaded: url_helper
INFO - 2018-08-11 12:53:53 --> Helper loaded: global_helper
INFO - 2018-08-11 12:53:53 --> Helper loaded: inflector_helper
INFO - 2018-08-11 12:53:53 --> Helper loaded: text_helper
INFO - 2018-08-11 12:53:53 --> Database Driver Class Initialized
INFO - 2018-08-11 12:53:53 --> Model Class Initialized
INFO - 2018-08-11 12:53:53 --> Controller Class Initialized
DEBUG - 2018-08-11 12:53:53 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 12:53:53 --> Email Class Initialized
INFO - 2018-08-11 12:53:53 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 12:53:53 --> Helper loaded: cookie_helper
INFO - 2018-08-11 12:53:53 --> Helper loaded: language_helper
INFO - 2018-08-11 12:53:53 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 12:53:53 --> Model Class Initialized
INFO - 2018-08-11 12:53:53 --> Helper loaded: date_helper
INFO - 2018-08-11 17:53:53 --> Model Class Initialized
INFO - 2018-08-11 17:53:53 --> Form Validation Class Initialized
DEBUG - 2018-08-11 17:53:53 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 17:53:53 --> Model Class Initialized
DEBUG - 2018-08-11 17:53:53 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 13:04:32 --> Config Class Initialized
INFO - 2018-08-11 13:04:32 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:04:32 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:04:32 --> Utf8 Class Initialized
INFO - 2018-08-11 13:04:32 --> URI Class Initialized
DEBUG - 2018-08-11 13:04:32 --> No URI present. Default controller set.
INFO - 2018-08-11 13:04:32 --> Router Class Initialized
INFO - 2018-08-11 13:04:32 --> Output Class Initialized
INFO - 2018-08-11 13:04:32 --> Security Class Initialized
DEBUG - 2018-08-11 13:04:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:04:32 --> Input Class Initialized
INFO - 2018-08-11 13:04:32 --> Language Class Initialized
INFO - 2018-08-11 13:04:32 --> Language Class Initialized
INFO - 2018-08-11 13:04:32 --> Config Class Initialized
INFO - 2018-08-11 13:04:32 --> Loader Class Initialized
INFO - 2018-08-11 13:04:32 --> Helper loaded: security_helper
INFO - 2018-08-11 13:04:32 --> Helper loaded: form_helper
INFO - 2018-08-11 13:04:32 --> Helper loaded: url_helper
INFO - 2018-08-11 13:04:32 --> Helper loaded: global_helper
INFO - 2018-08-11 13:04:32 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:04:32 --> Helper loaded: text_helper
INFO - 2018-08-11 13:04:32 --> Database Driver Class Initialized
INFO - 2018-08-11 13:04:32 --> Model Class Initialized
INFO - 2018-08-11 13:04:32 --> Controller Class Initialized
DEBUG - 2018-08-11 13:04:32 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:04:32 --> Email Class Initialized
INFO - 2018-08-11 13:04:32 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:04:32 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:04:32 --> Helper loaded: language_helper
INFO - 2018-08-11 13:04:32 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:04:32 --> Model Class Initialized
INFO - 2018-08-11 13:04:32 --> Helper loaded: date_helper
INFO - 2018-08-11 18:04:32 --> Model Class Initialized
INFO - 2018-08-11 18:04:32 --> Form Validation Class Initialized
DEBUG - 2018-08-11 18:04:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:04:32 --> Model Class Initialized
DEBUG - 2018-08-11 18:04:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 13:05:01 --> Config Class Initialized
INFO - 2018-08-11 13:05:01 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:05:01 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:05:01 --> Utf8 Class Initialized
INFO - 2018-08-11 13:05:01 --> URI Class Initialized
INFO - 2018-08-11 13:05:01 --> Router Class Initialized
INFO - 2018-08-11 13:05:01 --> Output Class Initialized
INFO - 2018-08-11 13:05:01 --> Security Class Initialized
DEBUG - 2018-08-11 13:05:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:05:01 --> Input Class Initialized
INFO - 2018-08-11 13:05:01 --> Language Class Initialized
INFO - 2018-08-11 13:05:01 --> Language Class Initialized
INFO - 2018-08-11 13:05:01 --> Config Class Initialized
INFO - 2018-08-11 13:05:01 --> Loader Class Initialized
INFO - 2018-08-11 13:05:01 --> Helper loaded: security_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: form_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: url_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: global_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: text_helper
INFO - 2018-08-11 13:05:01 --> Database Driver Class Initialized
INFO - 2018-08-11 13:05:01 --> Model Class Initialized
INFO - 2018-08-11 13:05:01 --> Controller Class Initialized
DEBUG - 2018-08-11 13:05:01 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:05:01 --> Email Class Initialized
INFO - 2018-08-11 13:05:01 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:05:01 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: language_helper
INFO - 2018-08-11 13:05:01 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:05:01 --> Model Class Initialized
INFO - 2018-08-11 13:05:01 --> Helper loaded: date_helper
INFO - 2018-08-11 18:05:01 --> Form Validation Class Initialized
DEBUG - 2018-08-11 18:05:01 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/tutor/models/Tutor_model.php
INFO - 2018-08-11 18:05:01 --> Model Class Initialized
INFO - 2018-08-11 13:05:01 --> Config Class Initialized
INFO - 2018-08-11 13:05:01 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:05:01 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:05:01 --> Utf8 Class Initialized
INFO - 2018-08-11 13:05:01 --> URI Class Initialized
INFO - 2018-08-11 13:05:01 --> Router Class Initialized
INFO - 2018-08-11 13:05:01 --> Output Class Initialized
INFO - 2018-08-11 13:05:01 --> Security Class Initialized
DEBUG - 2018-08-11 13:05:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:05:01 --> Input Class Initialized
INFO - 2018-08-11 13:05:01 --> Language Class Initialized
INFO - 2018-08-11 13:05:01 --> Language Class Initialized
INFO - 2018-08-11 13:05:01 --> Config Class Initialized
INFO - 2018-08-11 13:05:01 --> Loader Class Initialized
INFO - 2018-08-11 13:05:01 --> Helper loaded: security_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: form_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: url_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: global_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: text_helper
INFO - 2018-08-11 13:05:01 --> Database Driver Class Initialized
INFO - 2018-08-11 13:05:01 --> Model Class Initialized
INFO - 2018-08-11 13:05:01 --> Controller Class Initialized
DEBUG - 2018-08-11 13:05:01 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:05:01 --> Email Class Initialized
INFO - 2018-08-11 13:05:01 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:05:01 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:05:01 --> Helper loaded: language_helper
INFO - 2018-08-11 13:05:01 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:05:01 --> Model Class Initialized
INFO - 2018-08-11 13:05:01 --> Helper loaded: date_helper
INFO - 2018-08-11 18:05:01 --> Form Validation Class Initialized
INFO - 2018-08-11 18:05:01 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 18:05:01 --> Model Class Initialized
DEBUG - 2018-08-11 18:05:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:05:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/auth/views/login.php
DEBUG - 2018-08-11 18:05:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:05:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 18:05:02 --> Final output sent to browser
DEBUG - 2018-08-11 18:05:02 --> Total execution time: 0.1667
INFO - 2018-08-11 13:11:06 --> Config Class Initialized
INFO - 2018-08-11 13:11:06 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:11:06 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:11:06 --> Utf8 Class Initialized
INFO - 2018-08-11 13:11:06 --> URI Class Initialized
INFO - 2018-08-11 13:11:06 --> Router Class Initialized
INFO - 2018-08-11 13:11:06 --> Output Class Initialized
INFO - 2018-08-11 13:11:06 --> Security Class Initialized
DEBUG - 2018-08-11 13:11:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:11:06 --> Input Class Initialized
INFO - 2018-08-11 13:11:06 --> Language Class Initialized
INFO - 2018-08-11 13:11:06 --> Language Class Initialized
INFO - 2018-08-11 13:11:06 --> Config Class Initialized
INFO - 2018-08-11 13:11:06 --> Loader Class Initialized
INFO - 2018-08-11 13:11:06 --> Helper loaded: security_helper
INFO - 2018-08-11 13:11:06 --> Helper loaded: form_helper
INFO - 2018-08-11 13:11:06 --> Helper loaded: url_helper
INFO - 2018-08-11 13:11:06 --> Helper loaded: global_helper
INFO - 2018-08-11 13:11:06 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:11:06 --> Helper loaded: text_helper
INFO - 2018-08-11 13:11:06 --> Database Driver Class Initialized
INFO - 2018-08-11 13:11:06 --> Model Class Initialized
INFO - 2018-08-11 13:11:06 --> Controller Class Initialized
DEBUG - 2018-08-11 13:11:06 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:11:06 --> Email Class Initialized
INFO - 2018-08-11 13:11:06 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:11:06 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:11:06 --> Helper loaded: language_helper
INFO - 2018-08-11 13:11:06 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:11:06 --> Model Class Initialized
INFO - 2018-08-11 13:11:06 --> Helper loaded: date_helper
INFO - 2018-08-11 18:11:06 --> Form Validation Class Initialized
INFO - 2018-08-11 18:11:06 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 18:11:06 --> Language file loaded: language/english/form_validation_lang.php
INFO - 2018-08-11 13:11:07 --> Config Class Initialized
INFO - 2018-08-11 13:11:07 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:11:07 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:11:07 --> Utf8 Class Initialized
INFO - 2018-08-11 13:11:07 --> URI Class Initialized
INFO - 2018-08-11 13:11:07 --> Router Class Initialized
INFO - 2018-08-11 13:11:07 --> Output Class Initialized
INFO - 2018-08-11 13:11:07 --> Security Class Initialized
DEBUG - 2018-08-11 13:11:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:11:07 --> Input Class Initialized
INFO - 2018-08-11 13:11:07 --> Language Class Initialized
INFO - 2018-08-11 13:11:07 --> Language Class Initialized
INFO - 2018-08-11 13:11:07 --> Config Class Initialized
INFO - 2018-08-11 13:11:07 --> Loader Class Initialized
INFO - 2018-08-11 13:11:07 --> Helper loaded: security_helper
INFO - 2018-08-11 13:11:07 --> Helper loaded: form_helper
INFO - 2018-08-11 13:11:07 --> Helper loaded: url_helper
INFO - 2018-08-11 13:11:07 --> Helper loaded: global_helper
INFO - 2018-08-11 13:11:07 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:11:07 --> Helper loaded: text_helper
INFO - 2018-08-11 13:11:07 --> Database Driver Class Initialized
INFO - 2018-08-11 13:11:07 --> Model Class Initialized
INFO - 2018-08-11 13:11:07 --> Controller Class Initialized
DEBUG - 2018-08-11 13:11:07 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:11:07 --> Email Class Initialized
INFO - 2018-08-11 13:11:07 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:11:07 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:11:07 --> Helper loaded: language_helper
INFO - 2018-08-11 13:11:07 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:11:07 --> Model Class Initialized
INFO - 2018-08-11 13:11:07 --> Helper loaded: date_helper
INFO - 2018-08-11 18:11:07 --> Form Validation Class Initialized
INFO - 2018-08-11 18:11:07 --> Model Class Initialized
DEBUG - 2018-08-11 18:11:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 18:11:07 --> Model Class Initialized
DEBUG - 2018-08-11 18:11:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:11:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:11:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:11:07 --> Model Class Initialized
DEBUG - 2018-08-11 18:11:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:11:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 18:11:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 18:11:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:11:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 18:11:07 --> Final output sent to browser
DEBUG - 2018-08-11 18:11:07 --> Total execution time: 0.2598
INFO - 2018-08-11 13:11:28 --> Config Class Initialized
INFO - 2018-08-11 13:11:28 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:11:28 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:11:28 --> Utf8 Class Initialized
INFO - 2018-08-11 13:11:28 --> URI Class Initialized
INFO - 2018-08-11 13:11:28 --> Router Class Initialized
INFO - 2018-08-11 13:11:28 --> Output Class Initialized
INFO - 2018-08-11 13:11:28 --> Security Class Initialized
DEBUG - 2018-08-11 13:11:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:11:28 --> Input Class Initialized
INFO - 2018-08-11 13:11:28 --> Language Class Initialized
INFO - 2018-08-11 13:11:28 --> Language Class Initialized
INFO - 2018-08-11 13:11:28 --> Config Class Initialized
INFO - 2018-08-11 13:11:28 --> Loader Class Initialized
INFO - 2018-08-11 13:11:28 --> Helper loaded: security_helper
INFO - 2018-08-11 13:11:28 --> Helper loaded: form_helper
INFO - 2018-08-11 13:11:28 --> Helper loaded: url_helper
INFO - 2018-08-11 13:11:28 --> Helper loaded: global_helper
INFO - 2018-08-11 13:11:28 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:11:28 --> Helper loaded: text_helper
INFO - 2018-08-11 13:11:28 --> Database Driver Class Initialized
INFO - 2018-08-11 13:11:28 --> Model Class Initialized
INFO - 2018-08-11 13:11:28 --> Controller Class Initialized
DEBUG - 2018-08-11 13:11:28 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:11:28 --> Email Class Initialized
INFO - 2018-08-11 13:11:28 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:11:28 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:11:28 --> Helper loaded: language_helper
INFO - 2018-08-11 13:11:28 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:11:28 --> Model Class Initialized
INFO - 2018-08-11 13:11:28 --> Helper loaded: date_helper
INFO - 2018-08-11 18:11:28 --> Form Validation Class Initialized
INFO - 2018-08-11 18:11:28 --> Model Class Initialized
DEBUG - 2018-08-11 18:11:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:11:28 --> Model Class Initialized
DEBUG - 2018-08-11 18:11:28 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:11:28 --> Model Class Initialized
INFO - 2018-08-11 18:11:28 --> Model Class Initialized
DEBUG - 2018-08-11 18:11:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:11:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:11:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:11:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:11:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:11:28 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:11:28 --> Final output sent to browser
DEBUG - 2018-08-11 18:11:28 --> Total execution time: 0.1626
INFO - 2018-08-11 13:24:35 --> Config Class Initialized
INFO - 2018-08-11 13:24:35 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:24:35 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:24:35 --> Utf8 Class Initialized
INFO - 2018-08-11 13:24:35 --> URI Class Initialized
INFO - 2018-08-11 13:24:35 --> Router Class Initialized
INFO - 2018-08-11 13:24:35 --> Output Class Initialized
INFO - 2018-08-11 13:24:35 --> Security Class Initialized
DEBUG - 2018-08-11 13:24:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:24:35 --> Input Class Initialized
INFO - 2018-08-11 13:24:35 --> Language Class Initialized
INFO - 2018-08-11 13:24:35 --> Language Class Initialized
INFO - 2018-08-11 13:24:35 --> Config Class Initialized
INFO - 2018-08-11 13:24:35 --> Loader Class Initialized
INFO - 2018-08-11 13:24:35 --> Helper loaded: security_helper
INFO - 2018-08-11 13:24:35 --> Helper loaded: form_helper
INFO - 2018-08-11 13:24:35 --> Helper loaded: url_helper
INFO - 2018-08-11 13:24:35 --> Helper loaded: global_helper
INFO - 2018-08-11 13:24:35 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:24:35 --> Helper loaded: text_helper
INFO - 2018-08-11 13:24:35 --> Database Driver Class Initialized
INFO - 2018-08-11 13:24:35 --> Model Class Initialized
INFO - 2018-08-11 13:24:35 --> Controller Class Initialized
DEBUG - 2018-08-11 13:24:35 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:24:35 --> Email Class Initialized
INFO - 2018-08-11 13:24:35 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:24:35 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:24:35 --> Helper loaded: language_helper
INFO - 2018-08-11 13:24:35 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:24:35 --> Model Class Initialized
INFO - 2018-08-11 13:24:35 --> Helper loaded: date_helper
INFO - 2018-08-11 18:24:35 --> Form Validation Class Initialized
INFO - 2018-08-11 18:24:35 --> Model Class Initialized
DEBUG - 2018-08-11 18:24:35 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:24:35 --> Model Class Initialized
INFO - 2018-08-11 18:24:35 --> Model Class Initialized
DEBUG - 2018-08-11 18:24:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:24:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:24:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:24:35 --> Model Class Initialized
DEBUG - 2018-08-11 18:24:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:24:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:24:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:24:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:24:35 --> Final output sent to browser
DEBUG - 2018-08-11 18:24:35 --> Total execution time: 0.3188
INFO - 2018-08-11 13:25:46 --> Config Class Initialized
INFO - 2018-08-11 13:25:46 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:25:46 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:25:46 --> Utf8 Class Initialized
INFO - 2018-08-11 13:25:46 --> URI Class Initialized
INFO - 2018-08-11 13:25:46 --> Router Class Initialized
INFO - 2018-08-11 13:25:46 --> Output Class Initialized
INFO - 2018-08-11 13:25:46 --> Security Class Initialized
DEBUG - 2018-08-11 13:25:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:25:46 --> Input Class Initialized
INFO - 2018-08-11 13:25:46 --> Language Class Initialized
INFO - 2018-08-11 13:25:46 --> Language Class Initialized
INFO - 2018-08-11 13:25:46 --> Config Class Initialized
INFO - 2018-08-11 13:25:46 --> Loader Class Initialized
INFO - 2018-08-11 13:25:46 --> Helper loaded: security_helper
INFO - 2018-08-11 13:25:46 --> Helper loaded: form_helper
INFO - 2018-08-11 13:25:46 --> Helper loaded: url_helper
INFO - 2018-08-11 13:25:46 --> Helper loaded: global_helper
INFO - 2018-08-11 13:25:46 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:25:46 --> Helper loaded: text_helper
INFO - 2018-08-11 13:25:47 --> Database Driver Class Initialized
INFO - 2018-08-11 13:25:47 --> Model Class Initialized
INFO - 2018-08-11 13:25:47 --> Controller Class Initialized
DEBUG - 2018-08-11 13:25:47 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:25:47 --> Email Class Initialized
INFO - 2018-08-11 13:25:47 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:25:47 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:25:47 --> Helper loaded: language_helper
INFO - 2018-08-11 13:25:47 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:25:47 --> Model Class Initialized
INFO - 2018-08-11 13:25:47 --> Helper loaded: date_helper
INFO - 2018-08-11 18:25:47 --> Form Validation Class Initialized
INFO - 2018-08-11 18:25:47 --> Model Class Initialized
DEBUG - 2018-08-11 18:25:47 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:25:47 --> Model Class Initialized
INFO - 2018-08-11 18:25:47 --> Model Class Initialized
DEBUG - 2018-08-11 18:25:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:25:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:25:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:25:47 --> Model Class Initialized
DEBUG - 2018-08-11 18:25:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:25:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:25:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:25:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:25:47 --> Final output sent to browser
DEBUG - 2018-08-11 18:25:47 --> Total execution time: 0.1260
INFO - 2018-08-11 13:25:49 --> Config Class Initialized
INFO - 2018-08-11 13:25:49 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:25:49 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:25:49 --> Utf8 Class Initialized
INFO - 2018-08-11 13:25:49 --> URI Class Initialized
INFO - 2018-08-11 13:25:49 --> Router Class Initialized
INFO - 2018-08-11 13:25:49 --> Output Class Initialized
INFO - 2018-08-11 13:25:49 --> Security Class Initialized
DEBUG - 2018-08-11 13:25:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:25:49 --> Input Class Initialized
INFO - 2018-08-11 13:25:49 --> Language Class Initialized
INFO - 2018-08-11 13:25:49 --> Language Class Initialized
INFO - 2018-08-11 13:25:49 --> Config Class Initialized
INFO - 2018-08-11 13:25:49 --> Loader Class Initialized
INFO - 2018-08-11 13:25:49 --> Helper loaded: security_helper
INFO - 2018-08-11 13:25:49 --> Helper loaded: form_helper
INFO - 2018-08-11 13:25:49 --> Helper loaded: url_helper
INFO - 2018-08-11 13:25:49 --> Helper loaded: global_helper
INFO - 2018-08-11 13:25:49 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:25:49 --> Helper loaded: text_helper
INFO - 2018-08-11 13:25:49 --> Database Driver Class Initialized
INFO - 2018-08-11 13:25:49 --> Model Class Initialized
INFO - 2018-08-11 13:25:49 --> Controller Class Initialized
DEBUG - 2018-08-11 13:25:49 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:25:49 --> Email Class Initialized
INFO - 2018-08-11 13:25:49 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:25:49 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:25:49 --> Helper loaded: language_helper
INFO - 2018-08-11 13:25:49 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:25:49 --> Model Class Initialized
INFO - 2018-08-11 13:25:49 --> Helper loaded: date_helper
INFO - 2018-08-11 18:25:49 --> Form Validation Class Initialized
INFO - 2018-08-11 18:25:49 --> Model Class Initialized
DEBUG - 2018-08-11 18:25:49 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:25:49 --> Model Class Initialized
INFO - 2018-08-11 18:25:49 --> Model Class Initialized
DEBUG - 2018-08-11 18:25:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:25:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:25:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:25:49 --> Model Class Initialized
DEBUG - 2018-08-11 18:25:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:25:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:25:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:25:49 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:25:49 --> Final output sent to browser
DEBUG - 2018-08-11 18:25:49 --> Total execution time: 0.1273
INFO - 2018-08-11 13:28:44 --> Config Class Initialized
INFO - 2018-08-11 13:28:44 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:28:44 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:28:44 --> Utf8 Class Initialized
INFO - 2018-08-11 13:28:44 --> URI Class Initialized
INFO - 2018-08-11 13:28:44 --> Router Class Initialized
INFO - 2018-08-11 13:28:44 --> Output Class Initialized
INFO - 2018-08-11 13:28:44 --> Security Class Initialized
DEBUG - 2018-08-11 13:28:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:28:44 --> Input Class Initialized
INFO - 2018-08-11 13:28:44 --> Language Class Initialized
INFO - 2018-08-11 13:28:44 --> Language Class Initialized
INFO - 2018-08-11 13:28:44 --> Config Class Initialized
INFO - 2018-08-11 13:28:44 --> Loader Class Initialized
INFO - 2018-08-11 13:28:44 --> Helper loaded: security_helper
INFO - 2018-08-11 13:28:44 --> Helper loaded: form_helper
INFO - 2018-08-11 13:28:44 --> Helper loaded: url_helper
INFO - 2018-08-11 13:28:44 --> Helper loaded: global_helper
INFO - 2018-08-11 13:28:44 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:28:44 --> Helper loaded: text_helper
INFO - 2018-08-11 13:28:44 --> Database Driver Class Initialized
INFO - 2018-08-11 13:28:44 --> Model Class Initialized
INFO - 2018-08-11 13:28:44 --> Controller Class Initialized
DEBUG - 2018-08-11 13:28:44 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:28:44 --> Email Class Initialized
INFO - 2018-08-11 13:28:44 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:28:44 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:28:44 --> Helper loaded: language_helper
INFO - 2018-08-11 13:28:44 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:28:44 --> Model Class Initialized
INFO - 2018-08-11 13:28:44 --> Helper loaded: date_helper
INFO - 2018-08-11 18:28:44 --> Form Validation Class Initialized
INFO - 2018-08-11 18:28:44 --> Model Class Initialized
DEBUG - 2018-08-11 18:28:44 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:28:44 --> Model Class Initialized
INFO - 2018-08-11 18:28:44 --> Model Class Initialized
DEBUG - 2018-08-11 18:28:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:28:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:28:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:28:44 --> Model Class Initialized
DEBUG - 2018-08-11 18:28:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:28:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:28:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:28:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:28:44 --> Final output sent to browser
DEBUG - 2018-08-11 18:28:44 --> Total execution time: 0.2463
INFO - 2018-08-11 13:28:47 --> Config Class Initialized
INFO - 2018-08-11 13:28:47 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:28:47 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:28:47 --> Utf8 Class Initialized
INFO - 2018-08-11 13:28:47 --> URI Class Initialized
INFO - 2018-08-11 13:28:47 --> Router Class Initialized
INFO - 2018-08-11 13:28:47 --> Output Class Initialized
INFO - 2018-08-11 13:28:47 --> Security Class Initialized
DEBUG - 2018-08-11 13:28:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:28:47 --> Input Class Initialized
INFO - 2018-08-11 13:28:47 --> Language Class Initialized
INFO - 2018-08-11 13:28:47 --> Language Class Initialized
INFO - 2018-08-11 13:28:47 --> Config Class Initialized
INFO - 2018-08-11 13:28:47 --> Loader Class Initialized
INFO - 2018-08-11 13:28:47 --> Helper loaded: security_helper
INFO - 2018-08-11 13:28:47 --> Helper loaded: form_helper
INFO - 2018-08-11 13:28:47 --> Helper loaded: url_helper
INFO - 2018-08-11 13:28:47 --> Helper loaded: global_helper
INFO - 2018-08-11 13:28:47 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:28:47 --> Helper loaded: text_helper
INFO - 2018-08-11 13:28:47 --> Database Driver Class Initialized
INFO - 2018-08-11 13:28:48 --> Model Class Initialized
INFO - 2018-08-11 13:28:48 --> Controller Class Initialized
DEBUG - 2018-08-11 13:28:48 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:28:48 --> Email Class Initialized
INFO - 2018-08-11 13:28:48 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:28:48 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:28:48 --> Helper loaded: language_helper
INFO - 2018-08-11 13:28:48 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:28:48 --> Model Class Initialized
INFO - 2018-08-11 13:28:48 --> Helper loaded: date_helper
INFO - 2018-08-11 18:28:48 --> Form Validation Class Initialized
INFO - 2018-08-11 18:28:48 --> Model Class Initialized
DEBUG - 2018-08-11 18:28:48 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:28:48 --> Model Class Initialized
INFO - 2018-08-11 18:28:48 --> Model Class Initialized
DEBUG - 2018-08-11 18:28:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:28:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:28:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:28:48 --> Model Class Initialized
DEBUG - 2018-08-11 18:28:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:28:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:28:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:28:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:28:48 --> Final output sent to browser
DEBUG - 2018-08-11 18:28:48 --> Total execution time: 0.2795
INFO - 2018-08-11 13:29:56 --> Config Class Initialized
INFO - 2018-08-11 13:29:56 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:29:56 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:29:56 --> Utf8 Class Initialized
INFO - 2018-08-11 13:29:56 --> URI Class Initialized
INFO - 2018-08-11 13:29:56 --> Router Class Initialized
INFO - 2018-08-11 13:29:56 --> Output Class Initialized
INFO - 2018-08-11 13:29:56 --> Security Class Initialized
DEBUG - 2018-08-11 13:29:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:29:56 --> Input Class Initialized
INFO - 2018-08-11 13:29:56 --> Language Class Initialized
INFO - 2018-08-11 13:29:56 --> Language Class Initialized
INFO - 2018-08-11 13:29:56 --> Config Class Initialized
INFO - 2018-08-11 13:29:56 --> Loader Class Initialized
INFO - 2018-08-11 13:29:56 --> Helper loaded: security_helper
INFO - 2018-08-11 13:29:56 --> Helper loaded: form_helper
INFO - 2018-08-11 13:29:56 --> Helper loaded: url_helper
INFO - 2018-08-11 13:29:56 --> Helper loaded: global_helper
INFO - 2018-08-11 13:29:56 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:29:56 --> Helper loaded: text_helper
INFO - 2018-08-11 13:29:56 --> Database Driver Class Initialized
INFO - 2018-08-11 13:29:56 --> Model Class Initialized
INFO - 2018-08-11 13:29:56 --> Controller Class Initialized
DEBUG - 2018-08-11 13:29:56 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:29:56 --> Email Class Initialized
INFO - 2018-08-11 13:29:56 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:29:56 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:29:56 --> Helper loaded: language_helper
INFO - 2018-08-11 13:29:56 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:29:56 --> Model Class Initialized
INFO - 2018-08-11 13:29:56 --> Helper loaded: date_helper
INFO - 2018-08-11 18:29:56 --> Form Validation Class Initialized
INFO - 2018-08-11 18:29:56 --> Model Class Initialized
DEBUG - 2018-08-11 18:29:56 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:29:56 --> Model Class Initialized
INFO - 2018-08-11 18:29:56 --> Model Class Initialized
DEBUG - 2018-08-11 18:29:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:29:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:29:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:29:56 --> Model Class Initialized
DEBUG - 2018-08-11 18:29:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:29:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:29:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:29:56 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:29:56 --> Final output sent to browser
DEBUG - 2018-08-11 18:29:56 --> Total execution time: 0.2382
INFO - 2018-08-11 13:30:03 --> Config Class Initialized
INFO - 2018-08-11 13:30:03 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:30:03 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:30:03 --> Utf8 Class Initialized
INFO - 2018-08-11 13:30:03 --> URI Class Initialized
INFO - 2018-08-11 13:30:03 --> Router Class Initialized
INFO - 2018-08-11 13:30:03 --> Output Class Initialized
INFO - 2018-08-11 13:30:03 --> Security Class Initialized
DEBUG - 2018-08-11 13:30:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:30:03 --> Input Class Initialized
INFO - 2018-08-11 13:30:03 --> Language Class Initialized
INFO - 2018-08-11 13:30:03 --> Language Class Initialized
INFO - 2018-08-11 13:30:03 --> Config Class Initialized
INFO - 2018-08-11 13:30:03 --> Loader Class Initialized
INFO - 2018-08-11 13:30:03 --> Helper loaded: security_helper
INFO - 2018-08-11 13:30:03 --> Helper loaded: form_helper
INFO - 2018-08-11 13:30:03 --> Helper loaded: url_helper
INFO - 2018-08-11 13:30:03 --> Helper loaded: global_helper
INFO - 2018-08-11 13:30:03 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:30:03 --> Helper loaded: text_helper
INFO - 2018-08-11 13:30:03 --> Database Driver Class Initialized
INFO - 2018-08-11 13:30:03 --> Model Class Initialized
INFO - 2018-08-11 13:30:03 --> Controller Class Initialized
DEBUG - 2018-08-11 13:30:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:30:03 --> Email Class Initialized
INFO - 2018-08-11 13:30:03 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:30:03 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:30:03 --> Helper loaded: language_helper
INFO - 2018-08-11 13:30:03 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:30:03 --> Model Class Initialized
INFO - 2018-08-11 13:30:03 --> Helper loaded: date_helper
INFO - 2018-08-11 18:30:03 --> Form Validation Class Initialized
INFO - 2018-08-11 18:30:03 --> Model Class Initialized
DEBUG - 2018-08-11 18:30:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:30:03 --> Model Class Initialized
INFO - 2018-08-11 18:30:03 --> Model Class Initialized
DEBUG - 2018-08-11 18:30:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:30:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:30:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:30:03 --> Model Class Initialized
DEBUG - 2018-08-11 18:30:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:30:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:30:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:30:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:30:03 --> Final output sent to browser
DEBUG - 2018-08-11 18:30:03 --> Total execution time: 0.1921
INFO - 2018-08-11 13:31:40 --> Config Class Initialized
INFO - 2018-08-11 13:31:40 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:31:40 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:31:40 --> Utf8 Class Initialized
INFO - 2018-08-11 13:31:40 --> URI Class Initialized
INFO - 2018-08-11 13:31:40 --> Router Class Initialized
INFO - 2018-08-11 13:31:40 --> Output Class Initialized
INFO - 2018-08-11 13:31:40 --> Security Class Initialized
DEBUG - 2018-08-11 13:31:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:31:40 --> Input Class Initialized
INFO - 2018-08-11 13:31:40 --> Language Class Initialized
INFO - 2018-08-11 13:31:40 --> Language Class Initialized
INFO - 2018-08-11 13:31:40 --> Config Class Initialized
INFO - 2018-08-11 13:31:40 --> Loader Class Initialized
INFO - 2018-08-11 13:31:40 --> Helper loaded: security_helper
INFO - 2018-08-11 13:31:40 --> Helper loaded: form_helper
INFO - 2018-08-11 13:31:40 --> Helper loaded: url_helper
INFO - 2018-08-11 13:31:40 --> Helper loaded: global_helper
INFO - 2018-08-11 13:31:40 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:31:40 --> Helper loaded: text_helper
INFO - 2018-08-11 13:31:40 --> Database Driver Class Initialized
INFO - 2018-08-11 13:31:40 --> Model Class Initialized
INFO - 2018-08-11 13:31:40 --> Controller Class Initialized
DEBUG - 2018-08-11 13:31:40 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:31:40 --> Email Class Initialized
INFO - 2018-08-11 13:31:40 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:31:40 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:31:40 --> Helper loaded: language_helper
INFO - 2018-08-11 13:31:40 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:31:40 --> Model Class Initialized
INFO - 2018-08-11 13:31:40 --> Helper loaded: date_helper
INFO - 2018-08-11 18:31:40 --> Form Validation Class Initialized
INFO - 2018-08-11 18:31:40 --> Model Class Initialized
DEBUG - 2018-08-11 18:31:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:31:40 --> Model Class Initialized
DEBUG - 2018-08-11 18:31:40 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:31:40 --> Model Class Initialized
INFO - 2018-08-11 18:31:40 --> Model Class Initialized
DEBUG - 2018-08-11 18:31:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:31:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:31:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:31:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:31:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:31:40 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:31:40 --> Final output sent to browser
DEBUG - 2018-08-11 18:31:40 --> Total execution time: 0.3290
INFO - 2018-08-11 13:31:50 --> Config Class Initialized
INFO - 2018-08-11 13:31:50 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:31:50 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:31:50 --> Utf8 Class Initialized
INFO - 2018-08-11 13:31:50 --> URI Class Initialized
INFO - 2018-08-11 13:31:50 --> Router Class Initialized
INFO - 2018-08-11 13:31:50 --> Output Class Initialized
INFO - 2018-08-11 13:31:50 --> Security Class Initialized
DEBUG - 2018-08-11 13:31:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:31:50 --> Input Class Initialized
INFO - 2018-08-11 13:31:50 --> Language Class Initialized
INFO - 2018-08-11 13:31:50 --> Language Class Initialized
INFO - 2018-08-11 13:31:50 --> Config Class Initialized
INFO - 2018-08-11 13:31:50 --> Loader Class Initialized
INFO - 2018-08-11 13:31:50 --> Helper loaded: security_helper
INFO - 2018-08-11 13:31:50 --> Helper loaded: form_helper
INFO - 2018-08-11 13:31:50 --> Helper loaded: url_helper
INFO - 2018-08-11 13:31:50 --> Helper loaded: global_helper
INFO - 2018-08-11 13:31:50 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:31:50 --> Helper loaded: text_helper
INFO - 2018-08-11 13:31:50 --> Database Driver Class Initialized
INFO - 2018-08-11 13:31:50 --> Model Class Initialized
INFO - 2018-08-11 13:31:50 --> Controller Class Initialized
DEBUG - 2018-08-11 13:31:50 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:31:50 --> Email Class Initialized
INFO - 2018-08-11 13:31:50 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:31:50 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:31:50 --> Helper loaded: language_helper
INFO - 2018-08-11 13:31:50 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:31:50 --> Model Class Initialized
INFO - 2018-08-11 13:31:50 --> Helper loaded: date_helper
INFO - 2018-08-11 18:31:50 --> Form Validation Class Initialized
INFO - 2018-08-11 18:31:50 --> Model Class Initialized
DEBUG - 2018-08-11 18:31:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 18:31:50 --> Model Class Initialized
DEBUG - 2018-08-11 18:31:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:31:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:31:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:31:50 --> Model Class Initialized
DEBUG - 2018-08-11 18:31:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:31:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 18:31:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 18:31:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:31:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 18:31:50 --> Final output sent to browser
DEBUG - 2018-08-11 18:31:50 --> Total execution time: 0.2046
INFO - 2018-08-11 13:31:55 --> Config Class Initialized
INFO - 2018-08-11 13:31:55 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:31:55 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:31:55 --> Utf8 Class Initialized
INFO - 2018-08-11 13:31:55 --> URI Class Initialized
INFO - 2018-08-11 13:31:55 --> Router Class Initialized
INFO - 2018-08-11 13:31:55 --> Output Class Initialized
INFO - 2018-08-11 13:31:55 --> Security Class Initialized
DEBUG - 2018-08-11 13:31:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:31:55 --> Input Class Initialized
INFO - 2018-08-11 13:31:55 --> Language Class Initialized
INFO - 2018-08-11 13:31:55 --> Language Class Initialized
INFO - 2018-08-11 13:31:55 --> Config Class Initialized
INFO - 2018-08-11 13:31:55 --> Loader Class Initialized
INFO - 2018-08-11 13:31:55 --> Helper loaded: security_helper
INFO - 2018-08-11 13:31:55 --> Helper loaded: form_helper
INFO - 2018-08-11 13:31:55 --> Helper loaded: url_helper
INFO - 2018-08-11 13:31:55 --> Helper loaded: global_helper
INFO - 2018-08-11 13:31:55 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:31:55 --> Helper loaded: text_helper
INFO - 2018-08-11 13:31:55 --> Database Driver Class Initialized
INFO - 2018-08-11 13:31:55 --> Model Class Initialized
INFO - 2018-08-11 13:31:55 --> Controller Class Initialized
DEBUG - 2018-08-11 13:31:55 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:31:55 --> Email Class Initialized
INFO - 2018-08-11 13:31:55 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:31:55 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:31:55 --> Helper loaded: language_helper
INFO - 2018-08-11 13:31:55 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:31:55 --> Model Class Initialized
INFO - 2018-08-11 13:31:55 --> Helper loaded: date_helper
INFO - 2018-08-11 18:31:55 --> Form Validation Class Initialized
INFO - 2018-08-11 18:31:55 --> Model Class Initialized
DEBUG - 2018-08-11 18:31:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:31:55 --> Model Class Initialized
DEBUG - 2018-08-11 18:31:55 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:31:55 --> Model Class Initialized
INFO - 2018-08-11 18:31:55 --> Model Class Initialized
DEBUG - 2018-08-11 18:31:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:31:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:31:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:31:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:31:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:31:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:31:55 --> Final output sent to browser
DEBUG - 2018-08-11 18:31:55 --> Total execution time: 0.2589
INFO - 2018-08-11 13:42:42 --> Config Class Initialized
INFO - 2018-08-11 13:42:42 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:42:42 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:42:42 --> Utf8 Class Initialized
INFO - 2018-08-11 13:42:42 --> URI Class Initialized
INFO - 2018-08-11 13:42:42 --> Router Class Initialized
INFO - 2018-08-11 13:42:42 --> Output Class Initialized
INFO - 2018-08-11 13:42:42 --> Security Class Initialized
DEBUG - 2018-08-11 13:42:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:42:42 --> Input Class Initialized
INFO - 2018-08-11 13:42:42 --> Language Class Initialized
INFO - 2018-08-11 13:42:42 --> Language Class Initialized
INFO - 2018-08-11 13:42:42 --> Config Class Initialized
INFO - 2018-08-11 13:42:42 --> Loader Class Initialized
INFO - 2018-08-11 13:42:42 --> Helper loaded: security_helper
INFO - 2018-08-11 13:42:42 --> Helper loaded: form_helper
INFO - 2018-08-11 13:42:42 --> Helper loaded: url_helper
INFO - 2018-08-11 13:42:42 --> Helper loaded: global_helper
INFO - 2018-08-11 13:42:42 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:42:42 --> Helper loaded: text_helper
INFO - 2018-08-11 13:42:42 --> Database Driver Class Initialized
INFO - 2018-08-11 13:42:42 --> Model Class Initialized
INFO - 2018-08-11 13:42:42 --> Controller Class Initialized
DEBUG - 2018-08-11 13:42:43 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:42:43 --> Email Class Initialized
INFO - 2018-08-11 13:42:43 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:42:43 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:42:43 --> Helper loaded: language_helper
INFO - 2018-08-11 13:42:43 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:42:43 --> Model Class Initialized
INFO - 2018-08-11 13:42:43 --> Helper loaded: date_helper
INFO - 2018-08-11 18:42:43 --> Form Validation Class Initialized
INFO - 2018-08-11 18:42:43 --> Model Class Initialized
DEBUG - 2018-08-11 18:42:43 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:42:43 --> Model Class Initialized
INFO - 2018-08-11 18:42:43 --> Model Class Initialized
DEBUG - 2018-08-11 18:42:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:42:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:42:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:42:43 --> Model Class Initialized
DEBUG - 2018-08-11 18:42:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:42:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:42:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:42:43 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:42:43 --> Final output sent to browser
DEBUG - 2018-08-11 18:42:43 --> Total execution time: 0.3578
INFO - 2018-08-11 13:43:05 --> Config Class Initialized
INFO - 2018-08-11 13:43:05 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:43:05 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:43:05 --> Utf8 Class Initialized
INFO - 2018-08-11 13:43:05 --> URI Class Initialized
INFO - 2018-08-11 13:43:05 --> Router Class Initialized
INFO - 2018-08-11 13:43:05 --> Output Class Initialized
INFO - 2018-08-11 13:43:05 --> Security Class Initialized
DEBUG - 2018-08-11 13:43:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:43:05 --> Input Class Initialized
INFO - 2018-08-11 13:43:05 --> Language Class Initialized
INFO - 2018-08-11 13:43:05 --> Language Class Initialized
INFO - 2018-08-11 13:43:05 --> Config Class Initialized
INFO - 2018-08-11 13:43:05 --> Loader Class Initialized
INFO - 2018-08-11 13:43:05 --> Helper loaded: security_helper
INFO - 2018-08-11 13:43:05 --> Helper loaded: form_helper
INFO - 2018-08-11 13:43:05 --> Helper loaded: url_helper
INFO - 2018-08-11 13:43:05 --> Helper loaded: global_helper
INFO - 2018-08-11 13:43:05 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:43:05 --> Helper loaded: text_helper
INFO - 2018-08-11 13:43:05 --> Database Driver Class Initialized
INFO - 2018-08-11 13:43:05 --> Model Class Initialized
INFO - 2018-08-11 13:43:05 --> Controller Class Initialized
DEBUG - 2018-08-11 13:43:05 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:43:05 --> Email Class Initialized
INFO - 2018-08-11 13:43:05 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:43:05 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:43:05 --> Helper loaded: language_helper
INFO - 2018-08-11 13:43:05 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:43:05 --> Model Class Initialized
INFO - 2018-08-11 13:43:05 --> Helper loaded: date_helper
INFO - 2018-08-11 18:43:05 --> Form Validation Class Initialized
INFO - 2018-08-11 18:43:05 --> Model Class Initialized
DEBUG - 2018-08-11 18:43:05 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:43:05 --> Model Class Initialized
INFO - 2018-08-11 18:43:05 --> Model Class Initialized
DEBUG - 2018-08-11 18:43:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:43:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:43:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:43:05 --> Model Class Initialized
DEBUG - 2018-08-11 18:43:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:43:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:43:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:43:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:43:05 --> Final output sent to browser
DEBUG - 2018-08-11 18:43:05 --> Total execution time: 0.1522
INFO - 2018-08-11 13:43:29 --> Config Class Initialized
INFO - 2018-08-11 13:43:29 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:43:29 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:43:29 --> Utf8 Class Initialized
INFO - 2018-08-11 13:43:29 --> URI Class Initialized
INFO - 2018-08-11 13:43:29 --> Router Class Initialized
INFO - 2018-08-11 13:43:29 --> Output Class Initialized
INFO - 2018-08-11 13:43:29 --> Security Class Initialized
DEBUG - 2018-08-11 13:43:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:43:29 --> Input Class Initialized
INFO - 2018-08-11 13:43:29 --> Language Class Initialized
INFO - 2018-08-11 13:43:29 --> Language Class Initialized
INFO - 2018-08-11 13:43:29 --> Config Class Initialized
INFO - 2018-08-11 13:43:29 --> Loader Class Initialized
INFO - 2018-08-11 13:43:29 --> Helper loaded: security_helper
INFO - 2018-08-11 13:43:29 --> Helper loaded: form_helper
INFO - 2018-08-11 13:43:29 --> Helper loaded: url_helper
INFO - 2018-08-11 13:43:29 --> Helper loaded: global_helper
INFO - 2018-08-11 13:43:29 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:43:29 --> Helper loaded: text_helper
INFO - 2018-08-11 13:43:29 --> Database Driver Class Initialized
INFO - 2018-08-11 13:43:29 --> Model Class Initialized
INFO - 2018-08-11 13:43:29 --> Controller Class Initialized
DEBUG - 2018-08-11 13:43:29 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:43:29 --> Email Class Initialized
INFO - 2018-08-11 13:43:29 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:43:29 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:43:29 --> Helper loaded: language_helper
INFO - 2018-08-11 13:43:29 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:43:29 --> Model Class Initialized
INFO - 2018-08-11 13:43:29 --> Helper loaded: date_helper
INFO - 2018-08-11 18:43:29 --> Form Validation Class Initialized
INFO - 2018-08-11 18:43:29 --> Model Class Initialized
DEBUG - 2018-08-11 18:43:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 18:43:29 --> Model Class Initialized
DEBUG - 2018-08-11 18:43:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:43:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:43:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:43:29 --> Model Class Initialized
DEBUG - 2018-08-11 18:43:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:43:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 18:43:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/list_packages.php
DEBUG - 2018-08-11 18:43:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:43:29 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 18:43:29 --> Final output sent to browser
DEBUG - 2018-08-11 18:43:29 --> Total execution time: 0.2205
INFO - 2018-08-11 13:43:35 --> Config Class Initialized
INFO - 2018-08-11 13:43:35 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:43:35 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:43:35 --> Utf8 Class Initialized
INFO - 2018-08-11 13:43:35 --> URI Class Initialized
INFO - 2018-08-11 13:43:35 --> Router Class Initialized
INFO - 2018-08-11 13:43:35 --> Output Class Initialized
INFO - 2018-08-11 13:43:35 --> Security Class Initialized
DEBUG - 2018-08-11 13:43:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:43:35 --> Input Class Initialized
INFO - 2018-08-11 13:43:35 --> Language Class Initialized
INFO - 2018-08-11 13:43:35 --> Language Class Initialized
INFO - 2018-08-11 13:43:35 --> Config Class Initialized
INFO - 2018-08-11 13:43:35 --> Loader Class Initialized
INFO - 2018-08-11 13:43:35 --> Helper loaded: security_helper
INFO - 2018-08-11 13:43:35 --> Helper loaded: form_helper
INFO - 2018-08-11 13:43:35 --> Helper loaded: url_helper
INFO - 2018-08-11 13:43:35 --> Helper loaded: global_helper
INFO - 2018-08-11 13:43:35 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:43:35 --> Helper loaded: text_helper
INFO - 2018-08-11 13:43:35 --> Database Driver Class Initialized
INFO - 2018-08-11 13:43:35 --> Model Class Initialized
INFO - 2018-08-11 13:43:35 --> Controller Class Initialized
DEBUG - 2018-08-11 13:43:35 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:43:35 --> Email Class Initialized
INFO - 2018-08-11 13:43:35 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:43:35 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:43:35 --> Helper loaded: language_helper
INFO - 2018-08-11 13:43:35 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:43:35 --> Model Class Initialized
INFO - 2018-08-11 13:43:35 --> Helper loaded: date_helper
INFO - 2018-08-11 18:43:35 --> Form Validation Class Initialized
INFO - 2018-08-11 18:43:35 --> Model Class Initialized
DEBUG - 2018-08-11 18:43:35 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:43:35 --> Model Class Initialized
INFO - 2018-08-11 18:43:35 --> Model Class Initialized
DEBUG - 2018-08-11 18:43:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:43:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:43:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:43:35 --> Model Class Initialized
DEBUG - 2018-08-11 18:43:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:43:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:43:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:43:35 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:43:35 --> Final output sent to browser
DEBUG - 2018-08-11 18:43:35 --> Total execution time: 0.1839
INFO - 2018-08-11 13:45:04 --> Config Class Initialized
INFO - 2018-08-11 13:45:04 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:45:04 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:45:04 --> Utf8 Class Initialized
INFO - 2018-08-11 13:45:04 --> URI Class Initialized
INFO - 2018-08-11 13:45:04 --> Router Class Initialized
INFO - 2018-08-11 13:45:04 --> Output Class Initialized
INFO - 2018-08-11 13:45:04 --> Security Class Initialized
DEBUG - 2018-08-11 13:45:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:45:04 --> Input Class Initialized
INFO - 2018-08-11 13:45:04 --> Language Class Initialized
INFO - 2018-08-11 13:45:04 --> Language Class Initialized
INFO - 2018-08-11 13:45:04 --> Config Class Initialized
INFO - 2018-08-11 13:45:04 --> Loader Class Initialized
INFO - 2018-08-11 13:45:04 --> Helper loaded: security_helper
INFO - 2018-08-11 13:45:04 --> Helper loaded: form_helper
INFO - 2018-08-11 13:45:04 --> Helper loaded: url_helper
INFO - 2018-08-11 13:45:04 --> Helper loaded: global_helper
INFO - 2018-08-11 13:45:04 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:45:04 --> Helper loaded: text_helper
INFO - 2018-08-11 13:45:04 --> Database Driver Class Initialized
INFO - 2018-08-11 13:45:04 --> Model Class Initialized
INFO - 2018-08-11 13:45:04 --> Controller Class Initialized
DEBUG - 2018-08-11 13:45:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:45:04 --> Email Class Initialized
INFO - 2018-08-11 13:45:04 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:45:04 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:45:04 --> Helper loaded: language_helper
INFO - 2018-08-11 13:45:04 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:45:04 --> Model Class Initialized
INFO - 2018-08-11 13:45:04 --> Helper loaded: date_helper
INFO - 2018-08-11 18:45:04 --> Form Validation Class Initialized
INFO - 2018-08-11 18:45:04 --> Model Class Initialized
DEBUG - 2018-08-11 18:45:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:45:04 --> Model Class Initialized
INFO - 2018-08-11 18:45:04 --> Model Class Initialized
DEBUG - 2018-08-11 18:45:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:45:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:45:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:45:04 --> Model Class Initialized
DEBUG - 2018-08-11 18:45:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:45:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:45:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:45:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:45:04 --> Final output sent to browser
DEBUG - 2018-08-11 18:45:04 --> Total execution time: 0.2103
INFO - 2018-08-11 13:45:08 --> Config Class Initialized
INFO - 2018-08-11 13:45:08 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:45:08 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:45:08 --> Utf8 Class Initialized
INFO - 2018-08-11 13:45:08 --> URI Class Initialized
INFO - 2018-08-11 13:45:08 --> Router Class Initialized
INFO - 2018-08-11 13:45:08 --> Output Class Initialized
INFO - 2018-08-11 13:45:08 --> Security Class Initialized
DEBUG - 2018-08-11 13:45:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:45:08 --> Input Class Initialized
INFO - 2018-08-11 13:45:08 --> Language Class Initialized
INFO - 2018-08-11 13:45:08 --> Language Class Initialized
INFO - 2018-08-11 13:45:08 --> Config Class Initialized
INFO - 2018-08-11 13:45:08 --> Loader Class Initialized
INFO - 2018-08-11 13:45:08 --> Helper loaded: security_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: form_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: url_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: global_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: text_helper
INFO - 2018-08-11 13:45:08 --> Database Driver Class Initialized
INFO - 2018-08-11 13:45:08 --> Model Class Initialized
INFO - 2018-08-11 13:45:08 --> Controller Class Initialized
DEBUG - 2018-08-11 13:45:08 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:45:08 --> Email Class Initialized
INFO - 2018-08-11 13:45:08 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:45:08 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: language_helper
INFO - 2018-08-11 13:45:08 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:45:08 --> Model Class Initialized
INFO - 2018-08-11 13:45:08 --> Helper loaded: date_helper
INFO - 2018-08-11 18:45:08 --> Form Validation Class Initialized
INFO - 2018-08-11 18:45:08 --> Model Class Initialized
DEBUG - 2018-08-11 18:45:08 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:45:08 --> Model Class Initialized
INFO - 2018-08-11 18:45:08 --> Model Class Initialized
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:45:08 --> Model Class Initialized
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:45:08 --> Final output sent to browser
DEBUG - 2018-08-11 18:45:08 --> Total execution time: 0.2099
INFO - 2018-08-11 13:45:08 --> Config Class Initialized
INFO - 2018-08-11 13:45:08 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:45:08 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:45:08 --> Utf8 Class Initialized
INFO - 2018-08-11 13:45:08 --> URI Class Initialized
INFO - 2018-08-11 13:45:08 --> Router Class Initialized
INFO - 2018-08-11 13:45:08 --> Output Class Initialized
INFO - 2018-08-11 13:45:08 --> Security Class Initialized
DEBUG - 2018-08-11 13:45:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:45:08 --> Input Class Initialized
INFO - 2018-08-11 13:45:08 --> Language Class Initialized
INFO - 2018-08-11 13:45:08 --> Language Class Initialized
INFO - 2018-08-11 13:45:08 --> Config Class Initialized
INFO - 2018-08-11 13:45:08 --> Loader Class Initialized
INFO - 2018-08-11 13:45:08 --> Helper loaded: security_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: form_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: url_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: global_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: text_helper
INFO - 2018-08-11 13:45:08 --> Database Driver Class Initialized
INFO - 2018-08-11 13:45:08 --> Model Class Initialized
INFO - 2018-08-11 13:45:08 --> Controller Class Initialized
DEBUG - 2018-08-11 13:45:08 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:45:08 --> Email Class Initialized
INFO - 2018-08-11 13:45:08 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:45:08 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:45:08 --> Helper loaded: language_helper
INFO - 2018-08-11 13:45:08 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:45:08 --> Model Class Initialized
INFO - 2018-08-11 13:45:08 --> Helper loaded: date_helper
INFO - 2018-08-11 18:45:08 --> Form Validation Class Initialized
INFO - 2018-08-11 18:45:08 --> Model Class Initialized
DEBUG - 2018-08-11 18:45:08 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:45:08 --> Model Class Initialized
INFO - 2018-08-11 18:45:08 --> Model Class Initialized
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:45:08 --> Model Class Initialized
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:45:08 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:45:08 --> Final output sent to browser
DEBUG - 2018-08-11 18:45:08 --> Total execution time: 0.1938
INFO - 2018-08-11 13:50:14 --> Config Class Initialized
INFO - 2018-08-11 13:50:14 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:50:14 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:50:14 --> Utf8 Class Initialized
INFO - 2018-08-11 13:50:14 --> URI Class Initialized
INFO - 2018-08-11 13:50:14 --> Router Class Initialized
INFO - 2018-08-11 13:50:14 --> Output Class Initialized
INFO - 2018-08-11 13:50:14 --> Security Class Initialized
DEBUG - 2018-08-11 13:50:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:50:14 --> Input Class Initialized
INFO - 2018-08-11 13:50:14 --> Language Class Initialized
INFO - 2018-08-11 13:50:14 --> Language Class Initialized
INFO - 2018-08-11 13:50:14 --> Config Class Initialized
INFO - 2018-08-11 13:50:14 --> Loader Class Initialized
INFO - 2018-08-11 13:50:14 --> Helper loaded: security_helper
INFO - 2018-08-11 13:50:14 --> Helper loaded: form_helper
INFO - 2018-08-11 13:50:14 --> Helper loaded: url_helper
INFO - 2018-08-11 13:50:14 --> Helper loaded: global_helper
INFO - 2018-08-11 13:50:14 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:50:14 --> Helper loaded: text_helper
INFO - 2018-08-11 13:50:14 --> Database Driver Class Initialized
INFO - 2018-08-11 13:50:14 --> Model Class Initialized
INFO - 2018-08-11 13:50:14 --> Controller Class Initialized
DEBUG - 2018-08-11 13:50:14 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:50:14 --> Email Class Initialized
INFO - 2018-08-11 13:50:14 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:50:14 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:50:14 --> Helper loaded: language_helper
INFO - 2018-08-11 13:50:14 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:50:14 --> Model Class Initialized
INFO - 2018-08-11 13:50:14 --> Helper loaded: date_helper
INFO - 2018-08-11 18:50:14 --> Form Validation Class Initialized
INFO - 2018-08-11 18:50:14 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:14 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:50:14 --> Model Class Initialized
INFO - 2018-08-11 18:50:14 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:50:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:50:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:50:14 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:50:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:50:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:50:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:50:15 --> Final output sent to browser
DEBUG - 2018-08-11 18:50:15 --> Total execution time: 0.2963
INFO - 2018-08-11 13:50:16 --> Config Class Initialized
INFO - 2018-08-11 13:50:16 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:50:16 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:50:16 --> Utf8 Class Initialized
INFO - 2018-08-11 13:50:16 --> URI Class Initialized
INFO - 2018-08-11 13:50:16 --> Router Class Initialized
INFO - 2018-08-11 13:50:16 --> Output Class Initialized
INFO - 2018-08-11 13:50:16 --> Security Class Initialized
DEBUG - 2018-08-11 13:50:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:50:16 --> Input Class Initialized
INFO - 2018-08-11 13:50:16 --> Language Class Initialized
INFO - 2018-08-11 13:50:16 --> Language Class Initialized
INFO - 2018-08-11 13:50:16 --> Config Class Initialized
INFO - 2018-08-11 13:50:16 --> Loader Class Initialized
INFO - 2018-08-11 13:50:16 --> Helper loaded: security_helper
INFO - 2018-08-11 13:50:16 --> Helper loaded: form_helper
INFO - 2018-08-11 13:50:16 --> Helper loaded: url_helper
INFO - 2018-08-11 13:50:16 --> Helper loaded: global_helper
INFO - 2018-08-11 13:50:16 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:50:16 --> Helper loaded: text_helper
INFO - 2018-08-11 13:50:16 --> Database Driver Class Initialized
INFO - 2018-08-11 13:50:16 --> Model Class Initialized
INFO - 2018-08-11 13:50:16 --> Controller Class Initialized
DEBUG - 2018-08-11 13:50:16 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:50:16 --> Email Class Initialized
INFO - 2018-08-11 13:50:16 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:50:16 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:50:16 --> Helper loaded: language_helper
INFO - 2018-08-11 13:50:16 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:50:16 --> Model Class Initialized
INFO - 2018-08-11 13:50:16 --> Helper loaded: date_helper
INFO - 2018-08-11 18:50:16 --> Form Validation Class Initialized
INFO - 2018-08-11 18:50:16 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:16 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:50:16 --> Model Class Initialized
INFO - 2018-08-11 18:50:16 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:50:17 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:50:17 --> Final output sent to browser
DEBUG - 2018-08-11 18:50:17 --> Total execution time: 0.1643
INFO - 2018-08-11 13:50:17 --> Config Class Initialized
INFO - 2018-08-11 13:50:17 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:50:17 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:50:17 --> Utf8 Class Initialized
INFO - 2018-08-11 13:50:17 --> URI Class Initialized
INFO - 2018-08-11 13:50:17 --> Router Class Initialized
INFO - 2018-08-11 13:50:17 --> Output Class Initialized
INFO - 2018-08-11 13:50:17 --> Security Class Initialized
DEBUG - 2018-08-11 13:50:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:50:17 --> Input Class Initialized
INFO - 2018-08-11 13:50:17 --> Language Class Initialized
INFO - 2018-08-11 13:50:17 --> Language Class Initialized
INFO - 2018-08-11 13:50:17 --> Config Class Initialized
INFO - 2018-08-11 13:50:17 --> Loader Class Initialized
INFO - 2018-08-11 13:50:17 --> Helper loaded: security_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: form_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: url_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: global_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: text_helper
INFO - 2018-08-11 13:50:17 --> Database Driver Class Initialized
INFO - 2018-08-11 13:50:17 --> Model Class Initialized
INFO - 2018-08-11 13:50:17 --> Controller Class Initialized
DEBUG - 2018-08-11 13:50:17 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:50:17 --> Email Class Initialized
INFO - 2018-08-11 13:50:17 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:50:17 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: language_helper
INFO - 2018-08-11 13:50:17 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:50:17 --> Model Class Initialized
INFO - 2018-08-11 13:50:17 --> Helper loaded: date_helper
INFO - 2018-08-11 18:50:17 --> Form Validation Class Initialized
INFO - 2018-08-11 18:50:17 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:17 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:50:17 --> Model Class Initialized
INFO - 2018-08-11 18:50:17 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:50:17 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:50:17 --> Final output sent to browser
DEBUG - 2018-08-11 18:50:17 --> Total execution time: 0.1844
INFO - 2018-08-11 13:50:17 --> Config Class Initialized
INFO - 2018-08-11 13:50:17 --> Hooks Class Initialized
DEBUG - 2018-08-11 13:50:17 --> UTF-8 Support Enabled
INFO - 2018-08-11 13:50:17 --> Utf8 Class Initialized
INFO - 2018-08-11 13:50:17 --> URI Class Initialized
INFO - 2018-08-11 13:50:17 --> Router Class Initialized
INFO - 2018-08-11 13:50:17 --> Output Class Initialized
INFO - 2018-08-11 13:50:17 --> Security Class Initialized
DEBUG - 2018-08-11 13:50:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 13:50:17 --> Input Class Initialized
INFO - 2018-08-11 13:50:17 --> Language Class Initialized
INFO - 2018-08-11 13:50:17 --> Language Class Initialized
INFO - 2018-08-11 13:50:17 --> Config Class Initialized
INFO - 2018-08-11 13:50:17 --> Loader Class Initialized
INFO - 2018-08-11 13:50:17 --> Helper loaded: security_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: form_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: url_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: global_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: inflector_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: text_helper
INFO - 2018-08-11 13:50:17 --> Database Driver Class Initialized
INFO - 2018-08-11 13:50:17 --> Model Class Initialized
INFO - 2018-08-11 13:50:17 --> Controller Class Initialized
DEBUG - 2018-08-11 13:50:17 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 13:50:17 --> Email Class Initialized
INFO - 2018-08-11 13:50:17 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 13:50:17 --> Helper loaded: cookie_helper
INFO - 2018-08-11 13:50:17 --> Helper loaded: language_helper
INFO - 2018-08-11 13:50:17 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 13:50:17 --> Model Class Initialized
INFO - 2018-08-11 13:50:17 --> Helper loaded: date_helper
INFO - 2018-08-11 18:50:17 --> Form Validation Class Initialized
INFO - 2018-08-11 18:50:17 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:17 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 18:50:17 --> Model Class Initialized
INFO - 2018-08-11 18:50:17 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 18:50:17 --> Model Class Initialized
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 18:50:17 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 18:50:17 --> Final output sent to browser
DEBUG - 2018-08-11 18:50:17 --> Total execution time: 0.3901
INFO - 2018-08-11 14:05:53 --> Config Class Initialized
INFO - 2018-08-11 14:05:53 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:05:53 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:05:53 --> Utf8 Class Initialized
INFO - 2018-08-11 14:05:53 --> URI Class Initialized
INFO - 2018-08-11 14:05:53 --> Router Class Initialized
INFO - 2018-08-11 14:05:53 --> Output Class Initialized
INFO - 2018-08-11 14:05:53 --> Security Class Initialized
DEBUG - 2018-08-11 14:05:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:05:53 --> Input Class Initialized
INFO - 2018-08-11 14:05:53 --> Language Class Initialized
INFO - 2018-08-11 14:05:53 --> Language Class Initialized
INFO - 2018-08-11 14:05:53 --> Config Class Initialized
INFO - 2018-08-11 14:05:53 --> Loader Class Initialized
INFO - 2018-08-11 14:05:53 --> Helper loaded: security_helper
INFO - 2018-08-11 14:05:53 --> Helper loaded: form_helper
INFO - 2018-08-11 14:05:53 --> Helper loaded: url_helper
INFO - 2018-08-11 14:05:53 --> Helper loaded: global_helper
INFO - 2018-08-11 14:05:53 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:05:53 --> Helper loaded: text_helper
INFO - 2018-08-11 14:05:53 --> Database Driver Class Initialized
INFO - 2018-08-11 14:05:53 --> Model Class Initialized
INFO - 2018-08-11 14:05:53 --> Controller Class Initialized
DEBUG - 2018-08-11 14:05:53 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:05:53 --> Email Class Initialized
INFO - 2018-08-11 14:05:53 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:05:53 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:05:53 --> Helper loaded: language_helper
INFO - 2018-08-11 14:05:53 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:05:53 --> Model Class Initialized
INFO - 2018-08-11 14:05:53 --> Helper loaded: date_helper
INFO - 2018-08-11 19:05:53 --> Form Validation Class Initialized
INFO - 2018-08-11 19:05:53 --> Model Class Initialized
DEBUG - 2018-08-11 19:05:54 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:05:54 --> Model Class Initialized
INFO - 2018-08-11 19:05:54 --> Model Class Initialized
DEBUG - 2018-08-11 19:05:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:05:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:05:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:05:54 --> Model Class Initialized
DEBUG - 2018-08-11 19:05:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:05:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:05:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:05:54 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:05:54 --> Final output sent to browser
DEBUG - 2018-08-11 19:05:54 --> Total execution time: 0.6655
INFO - 2018-08-11 14:05:55 --> Config Class Initialized
INFO - 2018-08-11 14:05:55 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:05:55 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:05:55 --> Utf8 Class Initialized
INFO - 2018-08-11 14:05:55 --> URI Class Initialized
INFO - 2018-08-11 14:05:55 --> Router Class Initialized
INFO - 2018-08-11 14:05:55 --> Output Class Initialized
INFO - 2018-08-11 14:05:55 --> Security Class Initialized
DEBUG - 2018-08-11 14:05:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:05:55 --> Input Class Initialized
INFO - 2018-08-11 14:05:55 --> Language Class Initialized
INFO - 2018-08-11 14:05:55 --> Language Class Initialized
INFO - 2018-08-11 14:05:55 --> Config Class Initialized
INFO - 2018-08-11 14:05:55 --> Loader Class Initialized
INFO - 2018-08-11 14:05:55 --> Helper loaded: security_helper
INFO - 2018-08-11 14:05:55 --> Helper loaded: form_helper
INFO - 2018-08-11 14:05:55 --> Helper loaded: url_helper
INFO - 2018-08-11 14:05:55 --> Helper loaded: global_helper
INFO - 2018-08-11 14:05:55 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:05:55 --> Helper loaded: text_helper
INFO - 2018-08-11 14:05:55 --> Database Driver Class Initialized
INFO - 2018-08-11 14:05:55 --> Model Class Initialized
INFO - 2018-08-11 14:05:55 --> Controller Class Initialized
DEBUG - 2018-08-11 14:05:55 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:05:55 --> Email Class Initialized
INFO - 2018-08-11 14:05:55 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:05:55 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:05:55 --> Helper loaded: language_helper
INFO - 2018-08-11 14:05:55 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:05:55 --> Model Class Initialized
INFO - 2018-08-11 14:05:55 --> Helper loaded: date_helper
INFO - 2018-08-11 19:05:55 --> Form Validation Class Initialized
INFO - 2018-08-11 19:05:55 --> Model Class Initialized
DEBUG - 2018-08-11 19:05:55 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:05:55 --> Model Class Initialized
INFO - 2018-08-11 19:05:55 --> Model Class Initialized
DEBUG - 2018-08-11 19:05:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:05:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:05:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:05:55 --> Model Class Initialized
DEBUG - 2018-08-11 19:05:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:05:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:05:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:05:55 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:05:55 --> Final output sent to browser
DEBUG - 2018-08-11 19:05:55 --> Total execution time: 0.2624
INFO - 2018-08-11 14:20:16 --> Config Class Initialized
INFO - 2018-08-11 14:20:16 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:20:16 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:20:16 --> Utf8 Class Initialized
INFO - 2018-08-11 14:20:16 --> URI Class Initialized
INFO - 2018-08-11 14:20:16 --> Router Class Initialized
INFO - 2018-08-11 14:20:16 --> Output Class Initialized
INFO - 2018-08-11 14:20:16 --> Security Class Initialized
DEBUG - 2018-08-11 14:20:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:20:16 --> Input Class Initialized
INFO - 2018-08-11 14:20:16 --> Language Class Initialized
INFO - 2018-08-11 14:20:16 --> Language Class Initialized
INFO - 2018-08-11 14:20:16 --> Config Class Initialized
INFO - 2018-08-11 14:20:16 --> Loader Class Initialized
INFO - 2018-08-11 14:20:16 --> Helper loaded: security_helper
INFO - 2018-08-11 14:20:16 --> Helper loaded: form_helper
INFO - 2018-08-11 14:20:16 --> Helper loaded: url_helper
INFO - 2018-08-11 14:20:16 --> Helper loaded: global_helper
INFO - 2018-08-11 14:20:16 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:20:16 --> Helper loaded: text_helper
INFO - 2018-08-11 14:20:16 --> Database Driver Class Initialized
INFO - 2018-08-11 14:20:16 --> Model Class Initialized
INFO - 2018-08-11 14:20:16 --> Controller Class Initialized
DEBUG - 2018-08-11 14:20:16 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:20:16 --> Email Class Initialized
INFO - 2018-08-11 14:20:16 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:20:16 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:20:16 --> Helper loaded: language_helper
INFO - 2018-08-11 14:20:16 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:20:16 --> Model Class Initialized
INFO - 2018-08-11 14:20:16 --> Helper loaded: date_helper
INFO - 2018-08-11 19:20:16 --> Form Validation Class Initialized
INFO - 2018-08-11 19:20:16 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:16 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:20:16 --> Model Class Initialized
INFO - 2018-08-11 19:20:16 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:20:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:20:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:20:16 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:20:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:20:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:20:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:20:16 --> Final output sent to browser
DEBUG - 2018-08-11 19:20:16 --> Total execution time: 0.4201
INFO - 2018-08-11 14:20:20 --> Config Class Initialized
INFO - 2018-08-11 14:20:20 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:20:20 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:20:20 --> Utf8 Class Initialized
INFO - 2018-08-11 14:20:20 --> URI Class Initialized
INFO - 2018-08-11 14:20:20 --> Router Class Initialized
INFO - 2018-08-11 14:20:20 --> Output Class Initialized
INFO - 2018-08-11 14:20:20 --> Security Class Initialized
DEBUG - 2018-08-11 14:20:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:20:20 --> Input Class Initialized
INFO - 2018-08-11 14:20:20 --> Language Class Initialized
INFO - 2018-08-11 14:20:20 --> Language Class Initialized
INFO - 2018-08-11 14:20:20 --> Config Class Initialized
INFO - 2018-08-11 14:20:20 --> Loader Class Initialized
INFO - 2018-08-11 14:20:20 --> Helper loaded: security_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: form_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: url_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: global_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: text_helper
INFO - 2018-08-11 14:20:20 --> Database Driver Class Initialized
INFO - 2018-08-11 14:20:20 --> Model Class Initialized
INFO - 2018-08-11 14:20:20 --> Controller Class Initialized
DEBUG - 2018-08-11 14:20:20 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:20:20 --> Email Class Initialized
INFO - 2018-08-11 14:20:20 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:20:20 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: language_helper
INFO - 2018-08-11 14:20:20 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:20:20 --> Model Class Initialized
INFO - 2018-08-11 14:20:20 --> Helper loaded: date_helper
INFO - 2018-08-11 19:20:20 --> Form Validation Class Initialized
INFO - 2018-08-11 19:20:20 --> Model Class Initialized
INFO - 2018-08-11 14:20:20 --> Config Class Initialized
INFO - 2018-08-11 14:20:20 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:20:20 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:20:20 --> Utf8 Class Initialized
INFO - 2018-08-11 14:20:20 --> URI Class Initialized
INFO - 2018-08-11 14:20:20 --> Router Class Initialized
INFO - 2018-08-11 14:20:20 --> Output Class Initialized
INFO - 2018-08-11 14:20:20 --> Security Class Initialized
DEBUG - 2018-08-11 14:20:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:20:20 --> Input Class Initialized
INFO - 2018-08-11 14:20:20 --> Language Class Initialized
INFO - 2018-08-11 14:20:20 --> Language Class Initialized
INFO - 2018-08-11 14:20:20 --> Config Class Initialized
INFO - 2018-08-11 14:20:20 --> Loader Class Initialized
INFO - 2018-08-11 14:20:20 --> Helper loaded: security_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: form_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: url_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: global_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: text_helper
INFO - 2018-08-11 14:20:20 --> Database Driver Class Initialized
DEBUG - 2018-08-11 19:20:20 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:20:20 --> Model Class Initialized
INFO - 2018-08-11 19:20:20 --> Model Class Initialized
INFO - 2018-08-11 14:20:20 --> Model Class Initialized
INFO - 2018-08-11 14:20:20 --> Controller Class Initialized
DEBUG - 2018-08-11 14:20:20 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:20:20 --> Email Class Initialized
INFO - 2018-08-11 14:20:20 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:20:20 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:20:20 --> Helper loaded: language_helper
DEBUG - 2018-08-11 19:20:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:20:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:20:20 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:20:20 --> Model Class Initialized
INFO - 2018-08-11 14:20:21 --> Config Class Initialized
INFO - 2018-08-11 14:20:21 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:20:21 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:20:21 --> Utf8 Class Initialized
INFO - 2018-08-11 14:20:21 --> URI Class Initialized
INFO - 2018-08-11 14:20:21 --> Router Class Initialized
INFO - 2018-08-11 14:20:21 --> Output Class Initialized
INFO - 2018-08-11 14:20:21 --> Security Class Initialized
DEBUG - 2018-08-11 14:20:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:20:21 --> Input Class Initialized
INFO - 2018-08-11 14:20:21 --> Language Class Initialized
INFO - 2018-08-11 14:20:21 --> Language Class Initialized
INFO - 2018-08-11 14:20:21 --> Config Class Initialized
INFO - 2018-08-11 14:20:21 --> Loader Class Initialized
INFO - 2018-08-11 14:20:21 --> Helper loaded: security_helper
INFO - 2018-08-11 14:20:21 --> Helper loaded: form_helper
INFO - 2018-08-11 14:20:21 --> Helper loaded: url_helper
INFO - 2018-08-11 14:20:21 --> Helper loaded: global_helper
INFO - 2018-08-11 14:20:21 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:20:21 --> Helper loaded: text_helper
INFO - 2018-08-11 14:20:21 --> Database Driver Class Initialized
INFO - 2018-08-11 14:20:21 --> Model Class Initialized
INFO - 2018-08-11 14:20:21 --> Controller Class Initialized
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:20:21 --> Final output sent to browser
DEBUG - 2018-08-11 19:20:21 --> Total execution time: 0.5792
DEBUG - 2018-08-11 14:20:21 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:20:21 --> Email Class Initialized
INFO - 2018-08-11 14:20:21 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:20:21 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:20:21 --> Helper loaded: language_helper
INFO - 2018-08-11 14:20:21 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:20:21 --> Model Class Initialized
INFO - 2018-08-11 14:20:21 --> Helper loaded: date_helper
INFO - 2018-08-11 19:20:21 --> Form Validation Class Initialized
INFO - 2018-08-11 19:20:21 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:21 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:20:21 --> Model Class Initialized
INFO - 2018-08-11 19:20:21 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:20:21 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:20:21 --> Final output sent to browser
DEBUG - 2018-08-11 19:20:21 --> Total execution time: 0.5174
INFO - 2018-08-11 14:20:21 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:20:21 --> Model Class Initialized
INFO - 2018-08-11 14:20:21 --> Helper loaded: date_helper
INFO - 2018-08-11 19:20:21 --> Form Validation Class Initialized
INFO - 2018-08-11 19:20:21 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:21 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:20:21 --> Model Class Initialized
INFO - 2018-08-11 19:20:21 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:20:21 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:20:21 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:20:21 --> Final output sent to browser
DEBUG - 2018-08-11 19:20:21 --> Total execution time: 0.3749
INFO - 2018-08-11 14:20:31 --> Config Class Initialized
INFO - 2018-08-11 14:20:31 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:20:31 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:20:31 --> Utf8 Class Initialized
INFO - 2018-08-11 14:20:31 --> URI Class Initialized
INFO - 2018-08-11 14:20:31 --> Router Class Initialized
INFO - 2018-08-11 14:20:31 --> Output Class Initialized
INFO - 2018-08-11 14:20:31 --> Security Class Initialized
DEBUG - 2018-08-11 14:20:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:20:31 --> Input Class Initialized
INFO - 2018-08-11 14:20:31 --> Language Class Initialized
INFO - 2018-08-11 14:20:31 --> Language Class Initialized
INFO - 2018-08-11 14:20:31 --> Config Class Initialized
INFO - 2018-08-11 14:20:31 --> Loader Class Initialized
INFO - 2018-08-11 14:20:31 --> Helper loaded: security_helper
INFO - 2018-08-11 14:20:31 --> Helper loaded: form_helper
INFO - 2018-08-11 14:20:31 --> Helper loaded: url_helper
INFO - 2018-08-11 14:20:31 --> Helper loaded: global_helper
INFO - 2018-08-11 14:20:31 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:20:31 --> Helper loaded: text_helper
INFO - 2018-08-11 14:20:31 --> Database Driver Class Initialized
INFO - 2018-08-11 14:20:31 --> Model Class Initialized
INFO - 2018-08-11 14:20:31 --> Controller Class Initialized
DEBUG - 2018-08-11 14:20:31 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:20:31 --> Email Class Initialized
INFO - 2018-08-11 14:20:31 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:20:31 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:20:31 --> Helper loaded: language_helper
INFO - 2018-08-11 14:20:31 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:20:31 --> Model Class Initialized
INFO - 2018-08-11 14:20:31 --> Helper loaded: date_helper
INFO - 2018-08-11 19:20:31 --> Form Validation Class Initialized
INFO - 2018-08-11 19:20:31 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:31 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:20:31 --> Model Class Initialized
INFO - 2018-08-11 19:20:31 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:20:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:20:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:20:31 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:20:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:20:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:20:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:20:31 --> Final output sent to browser
DEBUG - 2018-08-11 19:20:31 --> Total execution time: 0.1711
INFO - 2018-08-11 14:20:48 --> Config Class Initialized
INFO - 2018-08-11 14:20:48 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:20:48 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:20:48 --> Utf8 Class Initialized
INFO - 2018-08-11 14:20:48 --> URI Class Initialized
INFO - 2018-08-11 14:20:48 --> Router Class Initialized
INFO - 2018-08-11 14:20:48 --> Output Class Initialized
INFO - 2018-08-11 14:20:48 --> Security Class Initialized
DEBUG - 2018-08-11 14:20:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:20:48 --> Input Class Initialized
INFO - 2018-08-11 14:20:48 --> Language Class Initialized
INFO - 2018-08-11 14:20:48 --> Language Class Initialized
INFO - 2018-08-11 14:20:48 --> Config Class Initialized
INFO - 2018-08-11 14:20:48 --> Loader Class Initialized
INFO - 2018-08-11 14:20:48 --> Helper loaded: security_helper
INFO - 2018-08-11 14:20:48 --> Helper loaded: form_helper
INFO - 2018-08-11 14:20:48 --> Helper loaded: url_helper
INFO - 2018-08-11 14:20:48 --> Helper loaded: global_helper
INFO - 2018-08-11 14:20:48 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:20:48 --> Helper loaded: text_helper
INFO - 2018-08-11 14:20:48 --> Database Driver Class Initialized
INFO - 2018-08-11 14:20:48 --> Model Class Initialized
INFO - 2018-08-11 14:20:48 --> Controller Class Initialized
DEBUG - 2018-08-11 14:20:48 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:20:48 --> Email Class Initialized
INFO - 2018-08-11 14:20:48 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:20:48 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:20:48 --> Helper loaded: language_helper
INFO - 2018-08-11 14:20:48 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:20:48 --> Model Class Initialized
INFO - 2018-08-11 14:20:48 --> Helper loaded: date_helper
INFO - 2018-08-11 19:20:48 --> Form Validation Class Initialized
INFO - 2018-08-11 19:20:48 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 19:20:48 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:20:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:20:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:20:48 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:20:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 19:20:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/manage_courses.php
DEBUG - 2018-08-11 19:20:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:20:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 19:20:48 --> Final output sent to browser
DEBUG - 2018-08-11 19:20:48 --> Total execution time: 0.1587
INFO - 2018-08-11 14:20:58 --> Config Class Initialized
INFO - 2018-08-11 14:20:58 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:20:58 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:20:58 --> Utf8 Class Initialized
INFO - 2018-08-11 14:20:58 --> URI Class Initialized
INFO - 2018-08-11 14:20:58 --> Router Class Initialized
INFO - 2018-08-11 14:20:58 --> Output Class Initialized
INFO - 2018-08-11 14:20:58 --> Security Class Initialized
DEBUG - 2018-08-11 14:20:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:20:58 --> Input Class Initialized
INFO - 2018-08-11 14:20:58 --> Language Class Initialized
INFO - 2018-08-11 14:20:58 --> Language Class Initialized
INFO - 2018-08-11 14:20:58 --> Config Class Initialized
INFO - 2018-08-11 14:20:58 --> Loader Class Initialized
INFO - 2018-08-11 14:20:58 --> Helper loaded: security_helper
INFO - 2018-08-11 14:20:58 --> Helper loaded: form_helper
INFO - 2018-08-11 14:20:58 --> Helper loaded: url_helper
INFO - 2018-08-11 14:20:58 --> Helper loaded: global_helper
INFO - 2018-08-11 14:20:58 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:20:58 --> Helper loaded: text_helper
INFO - 2018-08-11 14:20:58 --> Database Driver Class Initialized
INFO - 2018-08-11 14:20:58 --> Model Class Initialized
INFO - 2018-08-11 14:20:58 --> Controller Class Initialized
DEBUG - 2018-08-11 14:20:58 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:20:58 --> Email Class Initialized
INFO - 2018-08-11 14:20:58 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:20:58 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:20:58 --> Helper loaded: language_helper
INFO - 2018-08-11 14:20:58 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:20:58 --> Model Class Initialized
INFO - 2018-08-11 14:20:58 --> Helper loaded: date_helper
INFO - 2018-08-11 19:20:58 --> Form Validation Class Initialized
INFO - 2018-08-11 19:20:58 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 19:20:58 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:20:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:20:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:20:59 --> Model Class Initialized
DEBUG - 2018-08-11 19:20:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:20:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 19:20:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/manage_locations.php
DEBUG - 2018-08-11 19:20:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:20:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 19:20:59 --> Final output sent to browser
DEBUG - 2018-08-11 19:20:59 --> Total execution time: 0.1846
INFO - 2018-08-11 14:21:03 --> Config Class Initialized
INFO - 2018-08-11 14:21:03 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:21:03 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:21:03 --> Utf8 Class Initialized
INFO - 2018-08-11 14:21:03 --> URI Class Initialized
INFO - 2018-08-11 14:21:03 --> Router Class Initialized
INFO - 2018-08-11 14:21:03 --> Output Class Initialized
INFO - 2018-08-11 14:21:03 --> Security Class Initialized
DEBUG - 2018-08-11 14:21:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:21:03 --> Input Class Initialized
INFO - 2018-08-11 14:21:03 --> Language Class Initialized
INFO - 2018-08-11 14:21:03 --> Language Class Initialized
INFO - 2018-08-11 14:21:03 --> Config Class Initialized
INFO - 2018-08-11 14:21:03 --> Loader Class Initialized
INFO - 2018-08-11 14:21:03 --> Helper loaded: security_helper
INFO - 2018-08-11 14:21:03 --> Helper loaded: form_helper
INFO - 2018-08-11 14:21:03 --> Helper loaded: url_helper
INFO - 2018-08-11 14:21:03 --> Helper loaded: global_helper
INFO - 2018-08-11 14:21:03 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:21:03 --> Helper loaded: text_helper
INFO - 2018-08-11 14:21:03 --> Database Driver Class Initialized
INFO - 2018-08-11 14:21:03 --> Model Class Initialized
INFO - 2018-08-11 14:21:03 --> Controller Class Initialized
DEBUG - 2018-08-11 14:21:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:21:03 --> Email Class Initialized
INFO - 2018-08-11 14:21:03 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:21:03 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:21:03 --> Helper loaded: language_helper
INFO - 2018-08-11 14:21:03 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:21:03 --> Model Class Initialized
INFO - 2018-08-11 14:21:03 --> Helper loaded: date_helper
INFO - 2018-08-11 19:21:03 --> Form Validation Class Initialized
INFO - 2018-08-11 19:21:03 --> Model Class Initialized
DEBUG - 2018-08-11 19:21:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:21:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:21:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:21:03 --> Model Class Initialized
DEBUG - 2018-08-11 19:21:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:21:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 19:21:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/personal_info.php
DEBUG - 2018-08-11 19:21:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:21:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 19:21:03 --> Final output sent to browser
DEBUG - 2018-08-11 19:21:03 --> Total execution time: 0.1878
INFO - 2018-08-11 14:21:14 --> Config Class Initialized
INFO - 2018-08-11 14:21:14 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:21:14 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:21:14 --> Utf8 Class Initialized
INFO - 2018-08-11 14:21:14 --> URI Class Initialized
INFO - 2018-08-11 14:21:14 --> Router Class Initialized
INFO - 2018-08-11 14:21:14 --> Output Class Initialized
INFO - 2018-08-11 14:21:14 --> Security Class Initialized
DEBUG - 2018-08-11 14:21:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:21:14 --> Input Class Initialized
INFO - 2018-08-11 14:21:14 --> Language Class Initialized
INFO - 2018-08-11 14:21:14 --> Language Class Initialized
INFO - 2018-08-11 14:21:14 --> Config Class Initialized
INFO - 2018-08-11 14:21:14 --> Loader Class Initialized
INFO - 2018-08-11 14:21:14 --> Helper loaded: security_helper
INFO - 2018-08-11 14:21:14 --> Helper loaded: form_helper
INFO - 2018-08-11 14:21:14 --> Helper loaded: url_helper
INFO - 2018-08-11 14:21:14 --> Helper loaded: global_helper
INFO - 2018-08-11 14:21:14 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:21:14 --> Helper loaded: text_helper
INFO - 2018-08-11 14:21:14 --> Database Driver Class Initialized
INFO - 2018-08-11 14:21:14 --> Model Class Initialized
INFO - 2018-08-11 14:21:14 --> Controller Class Initialized
DEBUG - 2018-08-11 14:21:14 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:21:14 --> Email Class Initialized
INFO - 2018-08-11 14:21:14 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:21:14 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:21:14 --> Helper loaded: language_helper
INFO - 2018-08-11 14:21:14 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:21:14 --> Model Class Initialized
INFO - 2018-08-11 14:21:14 --> Helper loaded: date_helper
INFO - 2018-08-11 19:21:14 --> Form Validation Class Initialized
INFO - 2018-08-11 19:21:14 --> Model Class Initialized
DEBUG - 2018-08-11 19:21:14 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:21:14 --> Model Class Initialized
INFO - 2018-08-11 19:21:14 --> Model Class Initialized
DEBUG - 2018-08-11 19:21:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:21:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:21:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:21:14 --> Model Class Initialized
DEBUG - 2018-08-11 19:21:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:21:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:21:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:21:14 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:21:14 --> Final output sent to browser
DEBUG - 2018-08-11 19:21:14 --> Total execution time: 0.1479
INFO - 2018-08-11 14:21:18 --> Config Class Initialized
INFO - 2018-08-11 14:21:18 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:21:18 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:21:18 --> Utf8 Class Initialized
INFO - 2018-08-11 14:21:18 --> URI Class Initialized
INFO - 2018-08-11 14:21:18 --> Router Class Initialized
INFO - 2018-08-11 14:21:18 --> Output Class Initialized
INFO - 2018-08-11 14:21:18 --> Security Class Initialized
DEBUG - 2018-08-11 14:21:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:21:18 --> Input Class Initialized
INFO - 2018-08-11 14:21:18 --> Language Class Initialized
INFO - 2018-08-11 14:21:18 --> Language Class Initialized
INFO - 2018-08-11 14:21:18 --> Config Class Initialized
INFO - 2018-08-11 14:21:18 --> Loader Class Initialized
INFO - 2018-08-11 14:21:18 --> Helper loaded: security_helper
INFO - 2018-08-11 14:21:18 --> Helper loaded: form_helper
INFO - 2018-08-11 14:21:18 --> Helper loaded: url_helper
INFO - 2018-08-11 14:21:18 --> Helper loaded: global_helper
INFO - 2018-08-11 14:21:18 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:21:18 --> Helper loaded: text_helper
INFO - 2018-08-11 14:21:18 --> Database Driver Class Initialized
INFO - 2018-08-11 14:21:18 --> Model Class Initialized
INFO - 2018-08-11 14:21:18 --> Controller Class Initialized
DEBUG - 2018-08-11 14:21:18 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:21:18 --> Email Class Initialized
INFO - 2018-08-11 14:21:18 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:21:18 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:21:18 --> Helper loaded: language_helper
INFO - 2018-08-11 14:21:18 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:21:18 --> Model Class Initialized
INFO - 2018-08-11 14:21:18 --> Helper loaded: date_helper
INFO - 2018-08-11 19:21:18 --> Form Validation Class Initialized
INFO - 2018-08-11 19:21:18 --> Model Class Initialized
DEBUG - 2018-08-11 19:21:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:21:18 --> Model Class Initialized
DEBUG - 2018-08-11 19:21:18 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:21:18 --> Model Class Initialized
INFO - 2018-08-11 19:21:18 --> Model Class Initialized
DEBUG - 2018-08-11 19:21:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:21:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:21:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:21:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:21:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:21:18 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:21:18 --> Final output sent to browser
DEBUG - 2018-08-11 19:21:18 --> Total execution time: 0.1551
INFO - 2018-08-11 14:22:48 --> Config Class Initialized
INFO - 2018-08-11 14:22:48 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:22:48 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:22:48 --> Utf8 Class Initialized
INFO - 2018-08-11 14:22:48 --> URI Class Initialized
INFO - 2018-08-11 14:22:48 --> Router Class Initialized
INFO - 2018-08-11 14:22:48 --> Output Class Initialized
INFO - 2018-08-11 14:22:48 --> Security Class Initialized
DEBUG - 2018-08-11 14:22:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:22:48 --> Input Class Initialized
INFO - 2018-08-11 14:22:48 --> Language Class Initialized
INFO - 2018-08-11 14:22:48 --> Language Class Initialized
INFO - 2018-08-11 14:22:48 --> Config Class Initialized
INFO - 2018-08-11 14:22:48 --> Loader Class Initialized
INFO - 2018-08-11 14:22:48 --> Helper loaded: security_helper
INFO - 2018-08-11 14:22:48 --> Helper loaded: form_helper
INFO - 2018-08-11 14:22:48 --> Helper loaded: url_helper
INFO - 2018-08-11 14:22:48 --> Helper loaded: global_helper
INFO - 2018-08-11 14:22:48 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:22:48 --> Helper loaded: text_helper
INFO - 2018-08-11 14:22:48 --> Database Driver Class Initialized
INFO - 2018-08-11 14:22:48 --> Model Class Initialized
INFO - 2018-08-11 14:22:48 --> Controller Class Initialized
DEBUG - 2018-08-11 14:22:48 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:22:48 --> Email Class Initialized
INFO - 2018-08-11 14:22:48 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:22:48 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:22:48 --> Helper loaded: language_helper
INFO - 2018-08-11 14:22:48 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:22:48 --> Model Class Initialized
INFO - 2018-08-11 14:22:48 --> Helper loaded: date_helper
INFO - 2018-08-11 19:22:48 --> Form Validation Class Initialized
INFO - 2018-08-11 19:22:48 --> Model Class Initialized
DEBUG - 2018-08-11 19:22:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:22:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:22:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:22:48 --> Model Class Initialized
DEBUG - 2018-08-11 19:22:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:22:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 19:22:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/contact_information.php
DEBUG - 2018-08-11 19:22:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:22:48 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 19:22:48 --> Final output sent to browser
DEBUG - 2018-08-11 19:22:48 --> Total execution time: 0.2479
INFO - 2018-08-11 14:22:57 --> Config Class Initialized
INFO - 2018-08-11 14:22:57 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:22:57 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:22:57 --> Utf8 Class Initialized
INFO - 2018-08-11 14:22:57 --> URI Class Initialized
INFO - 2018-08-11 14:22:57 --> Router Class Initialized
INFO - 2018-08-11 14:22:57 --> Output Class Initialized
INFO - 2018-08-11 14:22:57 --> Security Class Initialized
DEBUG - 2018-08-11 14:22:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:22:57 --> Input Class Initialized
INFO - 2018-08-11 14:22:57 --> Language Class Initialized
INFO - 2018-08-11 14:22:57 --> Language Class Initialized
INFO - 2018-08-11 14:22:57 --> Config Class Initialized
INFO - 2018-08-11 14:22:57 --> Loader Class Initialized
INFO - 2018-08-11 14:22:57 --> Helper loaded: security_helper
INFO - 2018-08-11 14:22:57 --> Helper loaded: form_helper
INFO - 2018-08-11 14:22:57 --> Helper loaded: url_helper
INFO - 2018-08-11 14:22:57 --> Helper loaded: global_helper
INFO - 2018-08-11 14:22:57 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:22:57 --> Helper loaded: text_helper
INFO - 2018-08-11 14:22:57 --> Database Driver Class Initialized
INFO - 2018-08-11 14:22:57 --> Model Class Initialized
INFO - 2018-08-11 14:22:57 --> Controller Class Initialized
DEBUG - 2018-08-11 14:22:57 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:22:57 --> Email Class Initialized
INFO - 2018-08-11 14:22:57 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:22:57 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:22:57 --> Helper loaded: language_helper
INFO - 2018-08-11 14:22:57 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:22:57 --> Model Class Initialized
INFO - 2018-08-11 14:22:57 --> Helper loaded: date_helper
INFO - 2018-08-11 19:22:57 --> Form Validation Class Initialized
INFO - 2018-08-11 19:22:57 --> Model Class Initialized
DEBUG - 2018-08-11 19:22:57 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:22:57 --> Model Class Initialized
INFO - 2018-08-11 19:22:57 --> Model Class Initialized
DEBUG - 2018-08-11 19:22:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:22:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:22:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:22:57 --> Model Class Initialized
DEBUG - 2018-08-11 19:22:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:22:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:22:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:22:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:22:57 --> Final output sent to browser
DEBUG - 2018-08-11 19:22:57 --> Total execution time: 0.2721
INFO - 2018-08-11 14:27:51 --> Config Class Initialized
INFO - 2018-08-11 14:27:51 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:27:51 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:27:51 --> Utf8 Class Initialized
INFO - 2018-08-11 14:27:51 --> URI Class Initialized
INFO - 2018-08-11 14:27:51 --> Router Class Initialized
INFO - 2018-08-11 14:27:51 --> Output Class Initialized
INFO - 2018-08-11 14:27:51 --> Security Class Initialized
DEBUG - 2018-08-11 14:27:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:27:51 --> Input Class Initialized
INFO - 2018-08-11 14:27:51 --> Language Class Initialized
INFO - 2018-08-11 14:27:51 --> Language Class Initialized
INFO - 2018-08-11 14:27:51 --> Config Class Initialized
INFO - 2018-08-11 14:27:51 --> Loader Class Initialized
INFO - 2018-08-11 14:27:51 --> Helper loaded: security_helper
INFO - 2018-08-11 14:27:51 --> Helper loaded: form_helper
INFO - 2018-08-11 14:27:51 --> Helper loaded: url_helper
INFO - 2018-08-11 14:27:51 --> Helper loaded: global_helper
INFO - 2018-08-11 14:27:51 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:27:51 --> Helper loaded: text_helper
INFO - 2018-08-11 14:27:51 --> Database Driver Class Initialized
INFO - 2018-08-11 14:27:51 --> Model Class Initialized
INFO - 2018-08-11 14:27:51 --> Controller Class Initialized
DEBUG - 2018-08-11 14:27:51 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:27:51 --> Email Class Initialized
INFO - 2018-08-11 14:27:51 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:27:51 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:27:51 --> Helper loaded: language_helper
INFO - 2018-08-11 14:27:51 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:27:51 --> Model Class Initialized
INFO - 2018-08-11 14:27:51 --> Helper loaded: date_helper
INFO - 2018-08-11 19:27:51 --> Form Validation Class Initialized
INFO - 2018-08-11 19:27:51 --> Model Class Initialized
DEBUG - 2018-08-11 19:27:51 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:27:51 --> Model Class Initialized
INFO - 2018-08-11 19:27:51 --> Model Class Initialized
DEBUG - 2018-08-11 19:27:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:27:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:27:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:27:51 --> Model Class Initialized
DEBUG - 2018-08-11 19:27:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:27:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:27:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:27:51 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:27:51 --> Final output sent to browser
DEBUG - 2018-08-11 19:27:51 --> Total execution time: 0.2426
INFO - 2018-08-11 14:28:03 --> Config Class Initialized
INFO - 2018-08-11 14:28:03 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:28:03 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:28:03 --> Utf8 Class Initialized
INFO - 2018-08-11 14:28:03 --> URI Class Initialized
INFO - 2018-08-11 14:28:03 --> Router Class Initialized
INFO - 2018-08-11 14:28:03 --> Output Class Initialized
INFO - 2018-08-11 14:28:03 --> Security Class Initialized
DEBUG - 2018-08-11 14:28:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:28:03 --> Input Class Initialized
INFO - 2018-08-11 14:28:03 --> Language Class Initialized
INFO - 2018-08-11 14:28:03 --> Language Class Initialized
INFO - 2018-08-11 14:28:03 --> Config Class Initialized
INFO - 2018-08-11 14:28:03 --> Loader Class Initialized
INFO - 2018-08-11 14:28:03 --> Helper loaded: security_helper
INFO - 2018-08-11 14:28:03 --> Helper loaded: form_helper
INFO - 2018-08-11 14:28:03 --> Helper loaded: url_helper
INFO - 2018-08-11 14:28:03 --> Helper loaded: global_helper
INFO - 2018-08-11 14:28:03 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:28:03 --> Helper loaded: text_helper
INFO - 2018-08-11 14:28:03 --> Database Driver Class Initialized
INFO - 2018-08-11 14:28:03 --> Model Class Initialized
INFO - 2018-08-11 14:28:03 --> Controller Class Initialized
DEBUG - 2018-08-11 14:28:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:28:03 --> Email Class Initialized
INFO - 2018-08-11 14:28:03 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:28:03 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:28:03 --> Helper loaded: language_helper
INFO - 2018-08-11 14:28:03 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:28:03 --> Model Class Initialized
INFO - 2018-08-11 14:28:03 --> Helper loaded: date_helper
INFO - 2018-08-11 19:28:03 --> Form Validation Class Initialized
INFO - 2018-08-11 19:28:03 --> Model Class Initialized
DEBUG - 2018-08-11 19:28:03 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:28:03 --> Model Class Initialized
INFO - 2018-08-11 19:28:03 --> Model Class Initialized
DEBUG - 2018-08-11 19:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:28:03 --> Model Class Initialized
DEBUG - 2018-08-11 19:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:28:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:28:03 --> Final output sent to browser
DEBUG - 2018-08-11 19:28:03 --> Total execution time: 0.1522
INFO - 2018-08-11 14:28:23 --> Config Class Initialized
INFO - 2018-08-11 14:28:23 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:28:23 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:28:23 --> Utf8 Class Initialized
INFO - 2018-08-11 14:28:23 --> URI Class Initialized
INFO - 2018-08-11 14:28:23 --> Router Class Initialized
INFO - 2018-08-11 14:28:23 --> Output Class Initialized
INFO - 2018-08-11 14:28:23 --> Security Class Initialized
DEBUG - 2018-08-11 14:28:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:28:23 --> Input Class Initialized
INFO - 2018-08-11 14:28:23 --> Language Class Initialized
INFO - 2018-08-11 14:28:23 --> Language Class Initialized
INFO - 2018-08-11 14:28:23 --> Config Class Initialized
INFO - 2018-08-11 14:28:23 --> Loader Class Initialized
INFO - 2018-08-11 14:28:23 --> Helper loaded: security_helper
INFO - 2018-08-11 14:28:23 --> Helper loaded: form_helper
INFO - 2018-08-11 14:28:23 --> Helper loaded: url_helper
INFO - 2018-08-11 14:28:23 --> Helper loaded: global_helper
INFO - 2018-08-11 14:28:23 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:28:23 --> Helper loaded: text_helper
INFO - 2018-08-11 14:28:23 --> Database Driver Class Initialized
INFO - 2018-08-11 14:28:23 --> Model Class Initialized
INFO - 2018-08-11 14:28:23 --> Controller Class Initialized
DEBUG - 2018-08-11 14:28:23 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:28:23 --> Email Class Initialized
INFO - 2018-08-11 14:28:23 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:28:23 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:28:23 --> Helper loaded: language_helper
INFO - 2018-08-11 14:28:23 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:28:23 --> Model Class Initialized
INFO - 2018-08-11 14:28:23 --> Helper loaded: date_helper
INFO - 2018-08-11 19:28:23 --> Form Validation Class Initialized
INFO - 2018-08-11 19:28:23 --> Model Class Initialized
DEBUG - 2018-08-11 19:28:23 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:28:23 --> Model Class Initialized
INFO - 2018-08-11 19:28:23 --> Model Class Initialized
DEBUG - 2018-08-11 19:28:23 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:28:23 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:28:23 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:28:23 --> Model Class Initialized
DEBUG - 2018-08-11 19:28:23 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:28:23 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:28:23 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:28:23 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:28:23 --> Final output sent to browser
DEBUG - 2018-08-11 19:28:23 --> Total execution time: 0.4104
INFO - 2018-08-11 14:29:16 --> Config Class Initialized
INFO - 2018-08-11 14:29:16 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:29:16 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:29:16 --> Utf8 Class Initialized
INFO - 2018-08-11 14:29:16 --> URI Class Initialized
INFO - 2018-08-11 14:29:16 --> Router Class Initialized
INFO - 2018-08-11 14:29:16 --> Output Class Initialized
INFO - 2018-08-11 14:29:16 --> Security Class Initialized
DEBUG - 2018-08-11 14:29:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:29:16 --> Input Class Initialized
INFO - 2018-08-11 14:29:16 --> Language Class Initialized
INFO - 2018-08-11 14:29:16 --> Language Class Initialized
INFO - 2018-08-11 14:29:16 --> Config Class Initialized
INFO - 2018-08-11 14:29:16 --> Loader Class Initialized
INFO - 2018-08-11 14:29:16 --> Helper loaded: security_helper
INFO - 2018-08-11 14:29:16 --> Helper loaded: form_helper
INFO - 2018-08-11 14:29:16 --> Helper loaded: url_helper
INFO - 2018-08-11 14:29:16 --> Helper loaded: global_helper
INFO - 2018-08-11 14:29:16 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:29:16 --> Helper loaded: text_helper
INFO - 2018-08-11 14:29:16 --> Database Driver Class Initialized
INFO - 2018-08-11 14:29:16 --> Model Class Initialized
INFO - 2018-08-11 14:29:16 --> Controller Class Initialized
DEBUG - 2018-08-11 14:29:16 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:29:16 --> Email Class Initialized
INFO - 2018-08-11 14:29:16 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:29:16 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:29:16 --> Helper loaded: language_helper
INFO - 2018-08-11 14:29:16 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:29:16 --> Model Class Initialized
INFO - 2018-08-11 14:29:16 --> Helper loaded: date_helper
INFO - 2018-08-11 19:29:16 --> Form Validation Class Initialized
INFO - 2018-08-11 19:29:16 --> Model Class Initialized
DEBUG - 2018-08-11 19:29:16 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:29:16 --> Model Class Initialized
INFO - 2018-08-11 19:29:16 --> Model Class Initialized
DEBUG - 2018-08-11 19:29:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:29:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:29:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:29:16 --> Model Class Initialized
DEBUG - 2018-08-11 19:29:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:29:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:29:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:29:16 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:29:16 --> Final output sent to browser
DEBUG - 2018-08-11 19:29:16 --> Total execution time: 0.1279
INFO - 2018-08-11 14:32:30 --> Config Class Initialized
INFO - 2018-08-11 14:32:30 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:32:30 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:32:30 --> Utf8 Class Initialized
INFO - 2018-08-11 14:32:30 --> URI Class Initialized
INFO - 2018-08-11 14:32:30 --> Router Class Initialized
INFO - 2018-08-11 14:32:30 --> Output Class Initialized
INFO - 2018-08-11 14:32:30 --> Security Class Initialized
DEBUG - 2018-08-11 14:32:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:32:30 --> Input Class Initialized
INFO - 2018-08-11 14:32:30 --> Language Class Initialized
INFO - 2018-08-11 14:32:30 --> Language Class Initialized
INFO - 2018-08-11 14:32:30 --> Config Class Initialized
INFO - 2018-08-11 14:32:30 --> Loader Class Initialized
INFO - 2018-08-11 14:32:30 --> Helper loaded: security_helper
INFO - 2018-08-11 14:32:30 --> Helper loaded: form_helper
INFO - 2018-08-11 14:32:30 --> Helper loaded: url_helper
INFO - 2018-08-11 14:32:30 --> Helper loaded: global_helper
INFO - 2018-08-11 14:32:30 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:32:30 --> Helper loaded: text_helper
INFO - 2018-08-11 14:32:30 --> Database Driver Class Initialized
INFO - 2018-08-11 14:32:30 --> Model Class Initialized
INFO - 2018-08-11 14:32:30 --> Controller Class Initialized
DEBUG - 2018-08-11 14:32:30 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:32:30 --> Email Class Initialized
INFO - 2018-08-11 14:32:30 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:32:30 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:32:30 --> Helper loaded: language_helper
INFO - 2018-08-11 14:32:30 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:32:30 --> Model Class Initialized
INFO - 2018-08-11 14:32:30 --> Helper loaded: date_helper
INFO - 2018-08-11 19:32:30 --> Form Validation Class Initialized
INFO - 2018-08-11 19:32:30 --> Model Class Initialized
DEBUG - 2018-08-11 19:32:30 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:32:30 --> Model Class Initialized
INFO - 2018-08-11 19:32:30 --> Model Class Initialized
DEBUG - 2018-08-11 19:32:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:32:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:32:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:32:31 --> Model Class Initialized
DEBUG - 2018-08-11 19:32:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:32:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:32:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:32:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:32:31 --> Final output sent to browser
DEBUG - 2018-08-11 19:32:31 --> Total execution time: 0.4141
INFO - 2018-08-11 14:32:36 --> Config Class Initialized
INFO - 2018-08-11 14:32:36 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:32:36 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:32:36 --> Utf8 Class Initialized
INFO - 2018-08-11 14:32:36 --> URI Class Initialized
INFO - 2018-08-11 14:32:36 --> Router Class Initialized
INFO - 2018-08-11 14:32:36 --> Output Class Initialized
INFO - 2018-08-11 14:32:36 --> Security Class Initialized
DEBUG - 2018-08-11 14:32:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:32:36 --> Input Class Initialized
INFO - 2018-08-11 14:32:36 --> Language Class Initialized
INFO - 2018-08-11 14:32:36 --> Language Class Initialized
INFO - 2018-08-11 14:32:36 --> Config Class Initialized
INFO - 2018-08-11 14:32:36 --> Loader Class Initialized
INFO - 2018-08-11 14:32:36 --> Helper loaded: security_helper
INFO - 2018-08-11 14:32:36 --> Helper loaded: form_helper
INFO - 2018-08-11 14:32:36 --> Helper loaded: url_helper
INFO - 2018-08-11 14:32:36 --> Helper loaded: global_helper
INFO - 2018-08-11 14:32:36 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:32:36 --> Helper loaded: text_helper
INFO - 2018-08-11 14:32:36 --> Database Driver Class Initialized
INFO - 2018-08-11 14:32:36 --> Model Class Initialized
INFO - 2018-08-11 14:32:36 --> Controller Class Initialized
DEBUG - 2018-08-11 14:32:36 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:32:36 --> Email Class Initialized
INFO - 2018-08-11 14:32:36 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:32:36 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:32:36 --> Helper loaded: language_helper
INFO - 2018-08-11 14:32:36 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:32:36 --> Model Class Initialized
INFO - 2018-08-11 14:32:36 --> Helper loaded: date_helper
INFO - 2018-08-11 19:32:36 --> Form Validation Class Initialized
INFO - 2018-08-11 19:32:36 --> Model Class Initialized
DEBUG - 2018-08-11 19:32:36 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:32:36 --> Model Class Initialized
INFO - 2018-08-11 19:32:36 --> Model Class Initialized
DEBUG - 2018-08-11 19:32:36 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:32:36 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:32:36 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:32:36 --> Model Class Initialized
DEBUG - 2018-08-11 19:32:36 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:32:36 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:32:36 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:32:36 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:32:36 --> Final output sent to browser
DEBUG - 2018-08-11 19:32:36 --> Total execution time: 0.1376
INFO - 2018-08-11 14:33:26 --> Config Class Initialized
INFO - 2018-08-11 14:33:26 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:33:26 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:33:26 --> Utf8 Class Initialized
INFO - 2018-08-11 14:33:26 --> URI Class Initialized
INFO - 2018-08-11 14:33:26 --> Router Class Initialized
INFO - 2018-08-11 14:33:26 --> Output Class Initialized
INFO - 2018-08-11 14:33:26 --> Security Class Initialized
DEBUG - 2018-08-11 14:33:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:33:26 --> Input Class Initialized
INFO - 2018-08-11 14:33:26 --> Language Class Initialized
INFO - 2018-08-11 14:33:26 --> Language Class Initialized
INFO - 2018-08-11 14:33:26 --> Config Class Initialized
INFO - 2018-08-11 14:33:26 --> Loader Class Initialized
INFO - 2018-08-11 14:33:26 --> Helper loaded: security_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: form_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: url_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: global_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: text_helper
INFO - 2018-08-11 14:33:26 --> Database Driver Class Initialized
INFO - 2018-08-11 14:33:26 --> Model Class Initialized
INFO - 2018-08-11 14:33:26 --> Controller Class Initialized
DEBUG - 2018-08-11 14:33:26 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:33:26 --> Email Class Initialized
INFO - 2018-08-11 14:33:26 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:33:26 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: language_helper
INFO - 2018-08-11 14:33:26 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:33:26 --> Model Class Initialized
INFO - 2018-08-11 14:33:26 --> Helper loaded: date_helper
INFO - 2018-08-11 19:33:26 --> Form Validation Class Initialized
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
DEBUG - 2018-08-11 19:33:26 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
INFO - 2018-08-11 14:33:26 --> Config Class Initialized
INFO - 2018-08-11 14:33:26 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:33:26 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:33:26 --> Utf8 Class Initialized
INFO - 2018-08-11 14:33:26 --> URI Class Initialized
INFO - 2018-08-11 14:33:26 --> Router Class Initialized
INFO - 2018-08-11 14:33:26 --> Output Class Initialized
INFO - 2018-08-11 14:33:26 --> Security Class Initialized
DEBUG - 2018-08-11 14:33:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:33:26 --> Input Class Initialized
INFO - 2018-08-11 14:33:26 --> Language Class Initialized
INFO - 2018-08-11 14:33:26 --> Language Class Initialized
INFO - 2018-08-11 14:33:26 --> Config Class Initialized
INFO - 2018-08-11 14:33:26 --> Loader Class Initialized
INFO - 2018-08-11 14:33:26 --> Helper loaded: security_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: form_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: url_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: global_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: text_helper
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
INFO - 2018-08-11 14:33:26 --> Database Driver Class Initialized
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
INFO - 2018-08-11 14:33:26 --> Model Class Initialized
INFO - 2018-08-11 14:33:26 --> Controller Class Initialized
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 14:33:26 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:33:26 --> Email Class Initialized
INFO - 2018-08-11 14:33:26 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:33:26 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: language_helper
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:33:26 --> Final output sent to browser
DEBUG - 2018-08-11 19:33:26 --> Total execution time: 0.1957
INFO - 2018-08-11 14:33:26 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:33:26 --> Model Class Initialized
INFO - 2018-08-11 14:33:26 --> Helper loaded: date_helper
INFO - 2018-08-11 19:33:26 --> Form Validation Class Initialized
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
DEBUG - 2018-08-11 19:33:26 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:33:26 --> Final output sent to browser
DEBUG - 2018-08-11 19:33:26 --> Total execution time: 0.1682
INFO - 2018-08-11 14:33:26 --> Config Class Initialized
INFO - 2018-08-11 14:33:26 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:33:26 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:33:26 --> Utf8 Class Initialized
INFO - 2018-08-11 14:33:26 --> URI Class Initialized
INFO - 2018-08-11 14:33:26 --> Router Class Initialized
INFO - 2018-08-11 14:33:26 --> Output Class Initialized
INFO - 2018-08-11 14:33:26 --> Security Class Initialized
DEBUG - 2018-08-11 14:33:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:33:26 --> Input Class Initialized
INFO - 2018-08-11 14:33:26 --> Language Class Initialized
INFO - 2018-08-11 14:33:26 --> Language Class Initialized
INFO - 2018-08-11 14:33:26 --> Config Class Initialized
INFO - 2018-08-11 14:33:26 --> Loader Class Initialized
INFO - 2018-08-11 14:33:26 --> Helper loaded: security_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: form_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: url_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: global_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: text_helper
INFO - 2018-08-11 14:33:26 --> Database Driver Class Initialized
INFO - 2018-08-11 14:33:26 --> Model Class Initialized
INFO - 2018-08-11 14:33:26 --> Controller Class Initialized
DEBUG - 2018-08-11 14:33:26 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:33:26 --> Email Class Initialized
INFO - 2018-08-11 14:33:26 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:33:26 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:33:26 --> Helper loaded: language_helper
INFO - 2018-08-11 14:33:26 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:33:26 --> Model Class Initialized
INFO - 2018-08-11 14:33:26 --> Helper loaded: date_helper
INFO - 2018-08-11 19:33:26 --> Form Validation Class Initialized
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
DEBUG - 2018-08-11 19:33:26 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:33:26 --> Model Class Initialized
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:33:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:33:26 --> Final output sent to browser
DEBUG - 2018-08-11 19:33:26 --> Total execution time: 0.1390
INFO - 2018-08-11 14:34:07 --> Config Class Initialized
INFO - 2018-08-11 14:34:07 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:34:07 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:34:07 --> Utf8 Class Initialized
INFO - 2018-08-11 14:34:07 --> URI Class Initialized
INFO - 2018-08-11 14:34:07 --> Router Class Initialized
INFO - 2018-08-11 14:34:07 --> Output Class Initialized
INFO - 2018-08-11 14:34:07 --> Security Class Initialized
DEBUG - 2018-08-11 14:34:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:34:07 --> Input Class Initialized
INFO - 2018-08-11 14:34:07 --> Language Class Initialized
INFO - 2018-08-11 14:34:07 --> Language Class Initialized
INFO - 2018-08-11 14:34:07 --> Config Class Initialized
INFO - 2018-08-11 14:34:07 --> Loader Class Initialized
INFO - 2018-08-11 14:34:07 --> Helper loaded: security_helper
INFO - 2018-08-11 14:34:07 --> Helper loaded: form_helper
INFO - 2018-08-11 14:34:07 --> Helper loaded: url_helper
INFO - 2018-08-11 14:34:07 --> Helper loaded: global_helper
INFO - 2018-08-11 14:34:07 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:34:07 --> Helper loaded: text_helper
INFO - 2018-08-11 14:34:07 --> Database Driver Class Initialized
INFO - 2018-08-11 14:34:07 --> Model Class Initialized
INFO - 2018-08-11 14:34:07 --> Controller Class Initialized
DEBUG - 2018-08-11 14:34:07 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:34:07 --> Email Class Initialized
INFO - 2018-08-11 14:34:07 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:34:07 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:34:07 --> Helper loaded: language_helper
INFO - 2018-08-11 14:34:07 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:34:07 --> Model Class Initialized
INFO - 2018-08-11 14:34:07 --> Helper loaded: date_helper
INFO - 2018-08-11 19:34:07 --> Form Validation Class Initialized
INFO - 2018-08-11 19:34:07 --> Model Class Initialized
DEBUG - 2018-08-11 19:34:07 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:34:07 --> Model Class Initialized
INFO - 2018-08-11 19:34:07 --> Model Class Initialized
DEBUG - 2018-08-11 19:34:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:34:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:34:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:34:07 --> Model Class Initialized
DEBUG - 2018-08-11 19:34:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:34:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:34:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:34:07 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:34:07 --> Final output sent to browser
DEBUG - 2018-08-11 19:34:07 --> Total execution time: 0.1632
INFO - 2018-08-11 14:51:01 --> Config Class Initialized
INFO - 2018-08-11 14:51:01 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:51:01 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:51:01 --> Utf8 Class Initialized
INFO - 2018-08-11 14:51:01 --> URI Class Initialized
INFO - 2018-08-11 14:51:01 --> Router Class Initialized
INFO - 2018-08-11 14:51:01 --> Output Class Initialized
INFO - 2018-08-11 14:51:01 --> Security Class Initialized
DEBUG - 2018-08-11 14:51:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:51:01 --> Input Class Initialized
INFO - 2018-08-11 14:51:01 --> Language Class Initialized
INFO - 2018-08-11 14:51:01 --> Language Class Initialized
INFO - 2018-08-11 14:51:01 --> Config Class Initialized
INFO - 2018-08-11 14:51:01 --> Loader Class Initialized
INFO - 2018-08-11 14:51:01 --> Helper loaded: security_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: form_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: url_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: global_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: text_helper
INFO - 2018-08-11 14:51:01 --> Database Driver Class Initialized
INFO - 2018-08-11 14:51:01 --> Model Class Initialized
INFO - 2018-08-11 14:51:01 --> Controller Class Initialized
INFO - 2018-08-11 14:51:01 --> Config Class Initialized
INFO - 2018-08-11 14:51:01 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:51:01 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:51:01 --> Utf8 Class Initialized
INFO - 2018-08-11 14:51:01 --> URI Class Initialized
INFO - 2018-08-11 14:51:01 --> Router Class Initialized
INFO - 2018-08-11 14:51:01 --> Output Class Initialized
INFO - 2018-08-11 14:51:01 --> Security Class Initialized
DEBUG - 2018-08-11 14:51:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:51:01 --> Input Class Initialized
INFO - 2018-08-11 14:51:01 --> Language Class Initialized
DEBUG - 2018-08-11 14:51:01 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:51:01 --> Email Class Initialized
INFO - 2018-08-11 14:51:01 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:51:01 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: language_helper
INFO - 2018-08-11 14:51:01 --> Language Class Initialized
INFO - 2018-08-11 14:51:01 --> Config Class Initialized
INFO - 2018-08-11 14:51:01 --> Loader Class Initialized
INFO - 2018-08-11 14:51:01 --> Helper loaded: security_helper
INFO - 2018-08-11 14:51:01 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:51:01 --> Helper loaded: form_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: url_helper
INFO - 2018-08-11 14:51:01 --> Model Class Initialized
INFO - 2018-08-11 14:51:01 --> Helper loaded: date_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: global_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: text_helper
INFO - 2018-08-11 14:51:01 --> Database Driver Class Initialized
INFO - 2018-08-11 19:51:01 --> Form Validation Class Initialized
INFO - 2018-08-11 19:51:01 --> Model Class Initialized
INFO - 2018-08-11 14:51:01 --> Model Class Initialized
INFO - 2018-08-11 14:51:01 --> Controller Class Initialized
DEBUG - 2018-08-11 19:51:01 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:51:01 --> Model Class Initialized
DEBUG - 2018-08-11 19:51:01 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
DEBUG - 2018-08-11 14:51:01 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 19:51:01 --> Model Class Initialized
INFO - 2018-08-11 19:51:01 --> Model Class Initialized
INFO - 2018-08-11 14:51:01 --> Email Class Initialized
INFO - 2018-08-11 14:51:01 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:51:01 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:51:01 --> Helper loaded: language_helper
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
INFO - 2018-08-11 14:51:02 --> Config Class Initialized
INFO - 2018-08-11 14:51:02 --> Hooks Class Initialized
DEBUG - 2018-08-11 14:51:02 --> UTF-8 Support Enabled
INFO - 2018-08-11 14:51:02 --> Utf8 Class Initialized
INFO - 2018-08-11 14:51:02 --> URI Class Initialized
INFO - 2018-08-11 14:51:02 --> Router Class Initialized
INFO - 2018-08-11 14:51:02 --> Output Class Initialized
INFO - 2018-08-11 14:51:02 --> Security Class Initialized
DEBUG - 2018-08-11 14:51:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 14:51:02 --> Input Class Initialized
INFO - 2018-08-11 14:51:02 --> Language Class Initialized
INFO - 2018-08-11 14:51:02 --> Language Class Initialized
INFO - 2018-08-11 14:51:02 --> Config Class Initialized
INFO - 2018-08-11 14:51:02 --> Loader Class Initialized
INFO - 2018-08-11 14:51:02 --> Helper loaded: security_helper
INFO - 2018-08-11 14:51:02 --> Helper loaded: form_helper
INFO - 2018-08-11 14:51:02 --> Helper loaded: url_helper
INFO - 2018-08-11 14:51:02 --> Helper loaded: global_helper
INFO - 2018-08-11 14:51:02 --> Helper loaded: inflector_helper
INFO - 2018-08-11 14:51:02 --> Helper loaded: text_helper
INFO - 2018-08-11 14:51:02 --> Database Driver Class Initialized
INFO - 2018-08-11 14:51:02 --> Model Class Initialized
INFO - 2018-08-11 14:51:02 --> Controller Class Initialized
DEBUG - 2018-08-11 14:51:02 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 14:51:02 --> Email Class Initialized
INFO - 2018-08-11 14:51:02 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 14:51:02 --> Helper loaded: cookie_helper
INFO - 2018-08-11 14:51:02 --> Helper loaded: language_helper
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:51:02 --> Final output sent to browser
DEBUG - 2018-08-11 19:51:02 --> Total execution time: 0.6564
INFO - 2018-08-11 14:51:02 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:51:02 --> Model Class Initialized
INFO - 2018-08-11 14:51:02 --> Helper loaded: date_helper
INFO - 2018-08-11 19:51:02 --> Form Validation Class Initialized
INFO - 2018-08-11 19:51:02 --> Model Class Initialized
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:51:02 --> Model Class Initialized
DEBUG - 2018-08-11 19:51:02 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:51:02 --> Model Class Initialized
INFO - 2018-08-11 19:51:02 --> Model Class Initialized
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:51:02 --> Final output sent to browser
DEBUG - 2018-08-11 19:51:02 --> Total execution time: 0.9695
INFO - 2018-08-11 14:51:02 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 14:51:02 --> Model Class Initialized
INFO - 2018-08-11 14:51:02 --> Helper loaded: date_helper
INFO - 2018-08-11 19:51:02 --> Form Validation Class Initialized
INFO - 2018-08-11 19:51:02 --> Model Class Initialized
DEBUG - 2018-08-11 19:51:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 19:51:02 --> Model Class Initialized
DEBUG - 2018-08-11 19:51:02 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 19:51:02 --> Model Class Initialized
INFO - 2018-08-11 19:51:02 --> Model Class Initialized
DEBUG - 2018-08-11 19:51:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 19:51:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 19:51:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 19:51:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 19:51:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 19:51:03 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 19:51:03 --> Final output sent to browser
DEBUG - 2018-08-11 19:51:03 --> Total execution time: 1.1479
INFO - 2018-08-11 15:00:38 --> Config Class Initialized
INFO - 2018-08-11 15:00:38 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:00:38 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:00:38 --> Utf8 Class Initialized
INFO - 2018-08-11 15:00:38 --> URI Class Initialized
INFO - 2018-08-11 15:00:38 --> Router Class Initialized
INFO - 2018-08-11 15:00:38 --> Output Class Initialized
INFO - 2018-08-11 15:00:38 --> Security Class Initialized
DEBUG - 2018-08-11 15:00:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:00:38 --> Input Class Initialized
INFO - 2018-08-11 15:00:38 --> Language Class Initialized
INFO - 2018-08-11 15:00:38 --> Language Class Initialized
INFO - 2018-08-11 15:00:38 --> Config Class Initialized
INFO - 2018-08-11 15:00:38 --> Loader Class Initialized
INFO - 2018-08-11 15:00:38 --> Helper loaded: security_helper
INFO - 2018-08-11 15:00:38 --> Helper loaded: form_helper
INFO - 2018-08-11 15:00:38 --> Helper loaded: url_helper
INFO - 2018-08-11 15:00:38 --> Helper loaded: global_helper
INFO - 2018-08-11 15:00:38 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:00:38 --> Helper loaded: text_helper
INFO - 2018-08-11 15:00:38 --> Database Driver Class Initialized
INFO - 2018-08-11 15:00:38 --> Model Class Initialized
INFO - 2018-08-11 15:00:38 --> Controller Class Initialized
DEBUG - 2018-08-11 15:00:38 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:00:38 --> Email Class Initialized
INFO - 2018-08-11 15:00:38 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:00:38 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:00:38 --> Helper loaded: language_helper
INFO - 2018-08-11 15:00:38 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:00:38 --> Model Class Initialized
INFO - 2018-08-11 15:00:38 --> Helper loaded: date_helper
INFO - 2018-08-11 20:00:38 --> Form Validation Class Initialized
INFO - 2018-08-11 20:00:38 --> Model Class Initialized
DEBUG - 2018-08-11 20:00:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:00:38 --> Model Class Initialized
DEBUG - 2018-08-11 20:00:38 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 20:00:38 --> Model Class Initialized
INFO - 2018-08-11 20:00:38 --> Model Class Initialized
DEBUG - 2018-08-11 20:00:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:00:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:00:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:00:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 20:00:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:00:38 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 20:00:38 --> Final output sent to browser
DEBUG - 2018-08-11 20:00:38 --> Total execution time: 0.3651
INFO - 2018-08-11 15:18:56 --> Config Class Initialized
INFO - 2018-08-11 15:18:56 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:18:56 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:18:56 --> Utf8 Class Initialized
INFO - 2018-08-11 15:18:56 --> URI Class Initialized
INFO - 2018-08-11 15:18:56 --> Router Class Initialized
INFO - 2018-08-11 15:18:56 --> Output Class Initialized
INFO - 2018-08-11 15:18:56 --> Security Class Initialized
DEBUG - 2018-08-11 15:18:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:18:56 --> Input Class Initialized
INFO - 2018-08-11 15:18:56 --> Language Class Initialized
INFO - 2018-08-11 15:18:57 --> Language Class Initialized
INFO - 2018-08-11 15:18:57 --> Config Class Initialized
INFO - 2018-08-11 15:18:57 --> Loader Class Initialized
INFO - 2018-08-11 15:18:57 --> Helper loaded: security_helper
INFO - 2018-08-11 15:18:57 --> Helper loaded: form_helper
INFO - 2018-08-11 15:18:57 --> Helper loaded: url_helper
INFO - 2018-08-11 15:18:57 --> Helper loaded: global_helper
INFO - 2018-08-11 15:18:57 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:18:57 --> Helper loaded: text_helper
INFO - 2018-08-11 15:18:57 --> Database Driver Class Initialized
INFO - 2018-08-11 15:18:57 --> Model Class Initialized
INFO - 2018-08-11 15:18:57 --> Controller Class Initialized
DEBUG - 2018-08-11 15:18:57 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:18:57 --> Email Class Initialized
INFO - 2018-08-11 15:18:57 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:18:57 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:18:57 --> Helper loaded: language_helper
INFO - 2018-08-11 15:18:57 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:18:57 --> Model Class Initialized
INFO - 2018-08-11 15:18:57 --> Helper loaded: date_helper
INFO - 2018-08-11 20:18:57 --> Form Validation Class Initialized
INFO - 2018-08-11 20:18:57 --> Model Class Initialized
DEBUG - 2018-08-11 20:18:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:18:57 --> Model Class Initialized
DEBUG - 2018-08-11 20:18:57 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 20:18:57 --> Model Class Initialized
INFO - 2018-08-11 20:18:57 --> Model Class Initialized
DEBUG - 2018-08-11 20:18:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:18:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:18:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:18:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 20:18:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:18:57 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 20:18:57 --> Final output sent to browser
DEBUG - 2018-08-11 20:18:57 --> Total execution time: 0.2489
INFO - 2018-08-11 15:19:04 --> Config Class Initialized
INFO - 2018-08-11 15:19:04 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:19:04 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:19:04 --> Utf8 Class Initialized
INFO - 2018-08-11 15:19:04 --> URI Class Initialized
INFO - 2018-08-11 15:19:04 --> Router Class Initialized
INFO - 2018-08-11 15:19:04 --> Output Class Initialized
INFO - 2018-08-11 15:19:04 --> Security Class Initialized
DEBUG - 2018-08-11 15:19:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:19:04 --> Input Class Initialized
INFO - 2018-08-11 15:19:04 --> Language Class Initialized
INFO - 2018-08-11 15:19:04 --> Language Class Initialized
INFO - 2018-08-11 15:19:04 --> Config Class Initialized
INFO - 2018-08-11 15:19:04 --> Loader Class Initialized
INFO - 2018-08-11 15:19:04 --> Helper loaded: security_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: form_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: url_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: global_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: text_helper
INFO - 2018-08-11 15:19:04 --> Database Driver Class Initialized
INFO - 2018-08-11 15:19:04 --> Model Class Initialized
INFO - 2018-08-11 15:19:04 --> Controller Class Initialized
DEBUG - 2018-08-11 15:19:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:19:04 --> Email Class Initialized
INFO - 2018-08-11 15:19:04 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:19:04 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: language_helper
INFO - 2018-08-11 15:19:04 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:19:04 --> Model Class Initialized
INFO - 2018-08-11 15:19:04 --> Helper loaded: date_helper
INFO - 2018-08-11 20:19:04 --> Form Validation Class Initialized
INFO - 2018-08-11 20:19:04 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:19:04 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 20:19:04 --> Model Class Initialized
INFO - 2018-08-11 20:19:04 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:19:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:19:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:19:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 20:19:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:19:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 20:19:04 --> Final output sent to browser
DEBUG - 2018-08-11 20:19:04 --> Total execution time: 0.1796
INFO - 2018-08-11 15:19:04 --> Config Class Initialized
INFO - 2018-08-11 15:19:04 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:19:04 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:19:04 --> Utf8 Class Initialized
INFO - 2018-08-11 15:19:04 --> URI Class Initialized
INFO - 2018-08-11 15:19:04 --> Router Class Initialized
INFO - 2018-08-11 15:19:04 --> Output Class Initialized
INFO - 2018-08-11 15:19:04 --> Security Class Initialized
DEBUG - 2018-08-11 15:19:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:19:04 --> Input Class Initialized
INFO - 2018-08-11 15:19:04 --> Language Class Initialized
INFO - 2018-08-11 15:19:04 --> Language Class Initialized
INFO - 2018-08-11 15:19:04 --> Config Class Initialized
INFO - 2018-08-11 15:19:04 --> Loader Class Initialized
INFO - 2018-08-11 15:19:04 --> Helper loaded: security_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: form_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: url_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: global_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: text_helper
INFO - 2018-08-11 15:19:04 --> Database Driver Class Initialized
INFO - 2018-08-11 15:19:04 --> Model Class Initialized
INFO - 2018-08-11 15:19:04 --> Controller Class Initialized
DEBUG - 2018-08-11 15:19:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:19:04 --> Email Class Initialized
INFO - 2018-08-11 15:19:04 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:19:04 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:19:04 --> Helper loaded: language_helper
INFO - 2018-08-11 15:19:04 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:19:05 --> Model Class Initialized
INFO - 2018-08-11 15:19:05 --> Helper loaded: date_helper
INFO - 2018-08-11 20:19:05 --> Form Validation Class Initialized
INFO - 2018-08-11 20:19:05 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:19:05 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:05 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 20:19:05 --> Model Class Initialized
INFO - 2018-08-11 20:19:05 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:19:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:19:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:19:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 20:19:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:19:05 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 20:19:05 --> Final output sent to browser
DEBUG - 2018-08-11 20:19:05 --> Total execution time: 0.1916
INFO - 2018-08-11 15:19:25 --> Config Class Initialized
INFO - 2018-08-11 15:19:25 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:19:25 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:19:25 --> Utf8 Class Initialized
INFO - 2018-08-11 15:19:25 --> URI Class Initialized
INFO - 2018-08-11 15:19:25 --> Router Class Initialized
INFO - 2018-08-11 15:19:25 --> Output Class Initialized
INFO - 2018-08-11 15:19:25 --> Security Class Initialized
DEBUG - 2018-08-11 15:19:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:19:25 --> Input Class Initialized
INFO - 2018-08-11 15:19:25 --> Language Class Initialized
INFO - 2018-08-11 15:19:25 --> Language Class Initialized
INFO - 2018-08-11 15:19:25 --> Config Class Initialized
INFO - 2018-08-11 15:19:25 --> Loader Class Initialized
INFO - 2018-08-11 15:19:25 --> Helper loaded: security_helper
INFO - 2018-08-11 15:19:25 --> Helper loaded: form_helper
INFO - 2018-08-11 15:19:25 --> Helper loaded: url_helper
INFO - 2018-08-11 15:19:25 --> Helper loaded: global_helper
INFO - 2018-08-11 15:19:25 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:19:25 --> Helper loaded: text_helper
INFO - 2018-08-11 15:19:25 --> Database Driver Class Initialized
INFO - 2018-08-11 15:19:25 --> Model Class Initialized
INFO - 2018-08-11 15:19:25 --> Controller Class Initialized
DEBUG - 2018-08-11 15:19:25 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:19:25 --> Email Class Initialized
INFO - 2018-08-11 15:19:25 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:19:25 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:19:25 --> Helper loaded: language_helper
INFO - 2018-08-11 15:19:25 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:19:25 --> Model Class Initialized
INFO - 2018-08-11 15:19:25 --> Helper loaded: date_helper
INFO - 2018-08-11 20:19:25 --> Form Validation Class Initialized
INFO - 2018-08-11 20:19:25 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:25 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:19:25 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:25 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 20:19:25 --> Model Class Initialized
INFO - 2018-08-11 20:19:25 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:19:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:19:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:19:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 20:19:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:19:26 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 20:19:26 --> Final output sent to browser
DEBUG - 2018-08-11 20:19:26 --> Total execution time: 0.1452
INFO - 2018-08-11 15:19:47 --> Config Class Initialized
INFO - 2018-08-11 15:19:47 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:19:47 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:19:47 --> Utf8 Class Initialized
INFO - 2018-08-11 15:19:47 --> URI Class Initialized
INFO - 2018-08-11 15:19:47 --> Router Class Initialized
INFO - 2018-08-11 15:19:47 --> Output Class Initialized
INFO - 2018-08-11 15:19:47 --> Security Class Initialized
DEBUG - 2018-08-11 15:19:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:19:47 --> Input Class Initialized
INFO - 2018-08-11 15:19:47 --> Language Class Initialized
INFO - 2018-08-11 15:19:47 --> Language Class Initialized
INFO - 2018-08-11 15:19:47 --> Config Class Initialized
INFO - 2018-08-11 15:19:47 --> Loader Class Initialized
INFO - 2018-08-11 15:19:47 --> Helper loaded: security_helper
INFO - 2018-08-11 15:19:47 --> Helper loaded: form_helper
INFO - 2018-08-11 15:19:47 --> Helper loaded: url_helper
INFO - 2018-08-11 15:19:47 --> Helper loaded: global_helper
INFO - 2018-08-11 15:19:47 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:19:47 --> Helper loaded: text_helper
INFO - 2018-08-11 15:19:47 --> Database Driver Class Initialized
INFO - 2018-08-11 15:19:47 --> Model Class Initialized
INFO - 2018-08-11 15:19:47 --> Controller Class Initialized
DEBUG - 2018-08-11 15:19:47 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:19:47 --> Email Class Initialized
INFO - 2018-08-11 15:19:47 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:19:47 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:19:47 --> Helper loaded: language_helper
INFO - 2018-08-11 15:19:47 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:19:47 --> Model Class Initialized
INFO - 2018-08-11 15:19:47 --> Helper loaded: date_helper
INFO - 2018-08-11 20:19:47 --> Form Validation Class Initialized
INFO - 2018-08-11 20:19:47 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:47 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 20:19:47 --> Model Class Initialized
INFO - 2018-08-11 20:19:47 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:19:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:19:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:19:47 --> Model Class Initialized
DEBUG - 2018-08-11 20:19:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:19:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 20:19:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:19:47 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 20:19:47 --> Final output sent to browser
DEBUG - 2018-08-11 20:19:47 --> Total execution time: 0.1421
INFO - 2018-08-11 15:21:50 --> Config Class Initialized
INFO - 2018-08-11 15:21:50 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:21:50 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:21:50 --> Utf8 Class Initialized
INFO - 2018-08-11 15:21:50 --> URI Class Initialized
INFO - 2018-08-11 15:21:50 --> Router Class Initialized
INFO - 2018-08-11 15:21:50 --> Output Class Initialized
INFO - 2018-08-11 15:21:50 --> Security Class Initialized
DEBUG - 2018-08-11 15:21:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:21:50 --> Input Class Initialized
INFO - 2018-08-11 15:21:50 --> Language Class Initialized
INFO - 2018-08-11 15:21:50 --> Language Class Initialized
INFO - 2018-08-11 15:21:50 --> Config Class Initialized
INFO - 2018-08-11 15:21:50 --> Loader Class Initialized
INFO - 2018-08-11 15:21:50 --> Helper loaded: security_helper
INFO - 2018-08-11 15:21:50 --> Helper loaded: form_helper
INFO - 2018-08-11 15:21:50 --> Helper loaded: url_helper
INFO - 2018-08-11 15:21:50 --> Helper loaded: global_helper
INFO - 2018-08-11 15:21:50 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:21:50 --> Helper loaded: text_helper
INFO - 2018-08-11 15:21:50 --> Database Driver Class Initialized
INFO - 2018-08-11 15:21:50 --> Model Class Initialized
INFO - 2018-08-11 15:21:50 --> Controller Class Initialized
DEBUG - 2018-08-11 15:21:50 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:21:50 --> Email Class Initialized
INFO - 2018-08-11 15:21:50 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:21:50 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:21:50 --> Helper loaded: language_helper
INFO - 2018-08-11 15:21:50 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:21:50 --> Model Class Initialized
INFO - 2018-08-11 15:21:50 --> Helper loaded: date_helper
INFO - 2018-08-11 20:21:50 --> Form Validation Class Initialized
INFO - 2018-08-11 20:21:50 --> Model Class Initialized
DEBUG - 2018-08-11 20:21:50 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 20:21:50 --> Model Class Initialized
INFO - 2018-08-11 20:21:50 --> Model Class Initialized
DEBUG - 2018-08-11 20:21:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:21:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:21:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:21:50 --> Model Class Initialized
DEBUG - 2018-08-11 20:21:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:21:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 20:21:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:21:50 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 20:21:50 --> Final output sent to browser
DEBUG - 2018-08-11 20:21:50 --> Total execution time: 0.2252
INFO - 2018-08-11 15:21:58 --> Config Class Initialized
INFO - 2018-08-11 15:21:58 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:21:58 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:21:58 --> Utf8 Class Initialized
INFO - 2018-08-11 15:21:58 --> URI Class Initialized
INFO - 2018-08-11 15:21:58 --> Router Class Initialized
INFO - 2018-08-11 15:21:58 --> Output Class Initialized
INFO - 2018-08-11 15:21:58 --> Security Class Initialized
DEBUG - 2018-08-11 15:21:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:21:58 --> Input Class Initialized
INFO - 2018-08-11 15:21:58 --> Language Class Initialized
INFO - 2018-08-11 15:21:58 --> Language Class Initialized
INFO - 2018-08-11 15:21:58 --> Config Class Initialized
INFO - 2018-08-11 15:21:58 --> Loader Class Initialized
INFO - 2018-08-11 15:21:58 --> Helper loaded: security_helper
INFO - 2018-08-11 15:21:58 --> Helper loaded: form_helper
INFO - 2018-08-11 15:21:58 --> Helper loaded: url_helper
INFO - 2018-08-11 15:21:58 --> Helper loaded: global_helper
INFO - 2018-08-11 15:21:58 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:21:58 --> Helper loaded: text_helper
INFO - 2018-08-11 15:21:58 --> Database Driver Class Initialized
INFO - 2018-08-11 15:21:58 --> Model Class Initialized
INFO - 2018-08-11 15:21:58 --> Controller Class Initialized
DEBUG - 2018-08-11 15:21:58 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:21:58 --> Email Class Initialized
INFO - 2018-08-11 15:21:58 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:21:58 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:21:58 --> Helper loaded: language_helper
INFO - 2018-08-11 15:21:58 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:21:58 --> Model Class Initialized
INFO - 2018-08-11 15:21:58 --> Helper loaded: date_helper
INFO - 2018-08-11 20:21:58 --> Form Validation Class Initialized
INFO - 2018-08-11 20:21:58 --> Model Class Initialized
DEBUG - 2018-08-11 20:21:58 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 20:21:58 --> Model Class Initialized
INFO - 2018-08-11 20:21:58 --> Model Class Initialized
DEBUG - 2018-08-11 20:21:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:21:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:21:58 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:21:58 --> Model Class Initialized
DEBUG - 2018-08-11 20:21:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:21:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 20:21:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:21:59 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 20:21:59 --> Final output sent to browser
DEBUG - 2018-08-11 20:21:59 --> Total execution time: 0.9960
INFO - 2018-08-11 15:25:00 --> Config Class Initialized
INFO - 2018-08-11 15:25:00 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:25:00 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:25:00 --> Utf8 Class Initialized
INFO - 2018-08-11 15:25:00 --> URI Class Initialized
INFO - 2018-08-11 15:25:00 --> Router Class Initialized
INFO - 2018-08-11 15:25:00 --> Output Class Initialized
INFO - 2018-08-11 15:25:00 --> Security Class Initialized
DEBUG - 2018-08-11 15:25:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:25:00 --> Input Class Initialized
INFO - 2018-08-11 15:25:00 --> Language Class Initialized
INFO - 2018-08-11 15:25:00 --> Language Class Initialized
INFO - 2018-08-11 15:25:00 --> Config Class Initialized
INFO - 2018-08-11 15:25:00 --> Loader Class Initialized
INFO - 2018-08-11 15:25:00 --> Helper loaded: security_helper
INFO - 2018-08-11 15:25:00 --> Helper loaded: form_helper
INFO - 2018-08-11 15:25:00 --> Helper loaded: url_helper
INFO - 2018-08-11 15:25:00 --> Helper loaded: global_helper
INFO - 2018-08-11 15:25:00 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:25:00 --> Helper loaded: text_helper
INFO - 2018-08-11 15:25:00 --> Database Driver Class Initialized
INFO - 2018-08-11 15:25:00 --> Model Class Initialized
INFO - 2018-08-11 15:25:00 --> Controller Class Initialized
DEBUG - 2018-08-11 15:25:00 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:25:00 --> Email Class Initialized
INFO - 2018-08-11 15:25:00 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:25:00 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:25:00 --> Helper loaded: language_helper
INFO - 2018-08-11 15:25:00 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:25:00 --> Model Class Initialized
INFO - 2018-08-11 15:25:00 --> Helper loaded: date_helper
INFO - 2018-08-11 20:25:00 --> Form Validation Class Initialized
INFO - 2018-08-11 20:25:00 --> Model Class Initialized
DEBUG - 2018-08-11 20:25:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/models/Student_model.php
INFO - 2018-08-11 20:25:00 --> Model Class Initialized
DEBUG - 2018-08-11 20:25:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:25:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:25:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:25:00 --> Model Class Initialized
DEBUG - 2018-08-11 20:25:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:25:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/buttons.php
DEBUG - 2018-08-11 20:25:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/student/views/index.php
DEBUG - 2018-08-11 20:25:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:25:00 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template.php
INFO - 2018-08-11 20:25:00 --> Final output sent to browser
DEBUG - 2018-08-11 20:25:00 --> Total execution time: 0.2495
INFO - 2018-08-11 15:25:04 --> Config Class Initialized
INFO - 2018-08-11 15:25:04 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:25:04 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:25:04 --> Utf8 Class Initialized
INFO - 2018-08-11 15:25:04 --> URI Class Initialized
INFO - 2018-08-11 15:25:04 --> Router Class Initialized
INFO - 2018-08-11 15:25:04 --> Output Class Initialized
INFO - 2018-08-11 15:25:04 --> Security Class Initialized
DEBUG - 2018-08-11 15:25:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:25:04 --> Input Class Initialized
INFO - 2018-08-11 15:25:04 --> Language Class Initialized
INFO - 2018-08-11 15:25:04 --> Language Class Initialized
INFO - 2018-08-11 15:25:04 --> Config Class Initialized
INFO - 2018-08-11 15:25:04 --> Loader Class Initialized
INFO - 2018-08-11 15:25:04 --> Helper loaded: security_helper
INFO - 2018-08-11 15:25:04 --> Helper loaded: form_helper
INFO - 2018-08-11 15:25:04 --> Helper loaded: url_helper
INFO - 2018-08-11 15:25:04 --> Helper loaded: global_helper
INFO - 2018-08-11 15:25:04 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:25:04 --> Helper loaded: text_helper
INFO - 2018-08-11 15:25:04 --> Database Driver Class Initialized
INFO - 2018-08-11 15:25:04 --> Model Class Initialized
INFO - 2018-08-11 15:25:04 --> Controller Class Initialized
DEBUG - 2018-08-11 15:25:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:25:04 --> Email Class Initialized
INFO - 2018-08-11 15:25:04 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:25:04 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:25:04 --> Helper loaded: language_helper
INFO - 2018-08-11 15:25:04 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:25:04 --> Model Class Initialized
INFO - 2018-08-11 15:25:04 --> Helper loaded: date_helper
INFO - 2018-08-11 20:25:04 --> Form Validation Class Initialized
INFO - 2018-08-11 20:25:04 --> Model Class Initialized
DEBUG - 2018-08-11 20:25:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:25:04 --> Model Class Initialized
DEBUG - 2018-08-11 20:25:04 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 20:25:04 --> Model Class Initialized
INFO - 2018-08-11 20:25:04 --> Model Class Initialized
DEBUG - 2018-08-11 20:25:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:25:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:25:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:25:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 20:25:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:25:04 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 20:25:04 --> Final output sent to browser
DEBUG - 2018-08-11 20:25:04 --> Total execution time: 0.1831
INFO - 2018-08-11 15:25:44 --> Config Class Initialized
INFO - 2018-08-11 15:25:44 --> Hooks Class Initialized
DEBUG - 2018-08-11 15:25:44 --> UTF-8 Support Enabled
INFO - 2018-08-11 15:25:44 --> Utf8 Class Initialized
INFO - 2018-08-11 15:25:44 --> URI Class Initialized
INFO - 2018-08-11 15:25:44 --> Router Class Initialized
INFO - 2018-08-11 15:25:44 --> Output Class Initialized
INFO - 2018-08-11 15:25:44 --> Security Class Initialized
DEBUG - 2018-08-11 15:25:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 15:25:44 --> Input Class Initialized
INFO - 2018-08-11 15:25:44 --> Language Class Initialized
INFO - 2018-08-11 15:25:44 --> Language Class Initialized
INFO - 2018-08-11 15:25:44 --> Config Class Initialized
INFO - 2018-08-11 15:25:44 --> Loader Class Initialized
INFO - 2018-08-11 15:25:44 --> Helper loaded: security_helper
INFO - 2018-08-11 15:25:44 --> Helper loaded: form_helper
INFO - 2018-08-11 15:25:44 --> Helper loaded: url_helper
INFO - 2018-08-11 15:25:44 --> Helper loaded: global_helper
INFO - 2018-08-11 15:25:44 --> Helper loaded: inflector_helper
INFO - 2018-08-11 15:25:44 --> Helper loaded: text_helper
INFO - 2018-08-11 15:25:44 --> Database Driver Class Initialized
INFO - 2018-08-11 15:25:44 --> Model Class Initialized
INFO - 2018-08-11 15:25:44 --> Controller Class Initialized
DEBUG - 2018-08-11 15:25:44 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 15:25:44 --> Email Class Initialized
INFO - 2018-08-11 15:25:44 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 15:25:44 --> Helper loaded: cookie_helper
INFO - 2018-08-11 15:25:44 --> Helper loaded: language_helper
INFO - 2018-08-11 15:25:44 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 15:25:44 --> Model Class Initialized
INFO - 2018-08-11 15:25:44 --> Helper loaded: date_helper
INFO - 2018-08-11 20:25:44 --> Form Validation Class Initialized
INFO - 2018-08-11 20:25:44 --> Model Class Initialized
DEBUG - 2018-08-11 20:25:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 20:25:44 --> Model Class Initialized
DEBUG - 2018-08-11 20:25:44 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/grocery_crud.php
INFO - 2018-08-11 20:25:44 --> Model Class Initialized
INFO - 2018-08-11 20:25:44 --> Model Class Initialized
DEBUG - 2018-08-11 20:25:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 20:25:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/scroller.php
DEBUG - 2018-08-11 20:25:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-leftmenu.php
DEBUG - 2018-08-11 20:25:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/button2.php
DEBUG - 2018-08-11 20:25:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 20:25:44 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/student-template-grocery.php
INFO - 2018-08-11 20:25:44 --> Final output sent to browser
DEBUG - 2018-08-11 20:25:44 --> Total execution time: 0.1664
INFO - 2018-08-11 16:28:00 --> Config Class Initialized
INFO - 2018-08-11 16:28:00 --> Hooks Class Initialized
DEBUG - 2018-08-11 16:28:00 --> UTF-8 Support Enabled
INFO - 2018-08-11 16:28:00 --> Utf8 Class Initialized
INFO - 2018-08-11 16:28:00 --> URI Class Initialized
INFO - 2018-08-11 16:28:00 --> Router Class Initialized
INFO - 2018-08-11 16:28:00 --> Output Class Initialized
INFO - 2018-08-11 16:28:00 --> Security Class Initialized
DEBUG - 2018-08-11 16:28:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 16:28:00 --> Input Class Initialized
INFO - 2018-08-11 16:28:00 --> Language Class Initialized
INFO - 2018-08-11 16:28:00 --> Language Class Initialized
INFO - 2018-08-11 16:28:00 --> Config Class Initialized
INFO - 2018-08-11 16:28:00 --> Loader Class Initialized
INFO - 2018-08-11 16:28:00 --> Helper loaded: security_helper
INFO - 2018-08-11 16:28:00 --> Helper loaded: form_helper
INFO - 2018-08-11 16:28:00 --> Helper loaded: url_helper
INFO - 2018-08-11 16:28:00 --> Helper loaded: global_helper
INFO - 2018-08-11 16:28:00 --> Helper loaded: inflector_helper
INFO - 2018-08-11 16:28:00 --> Helper loaded: text_helper
INFO - 2018-08-11 16:28:00 --> Database Driver Class Initialized
INFO - 2018-08-11 16:28:00 --> Model Class Initialized
INFO - 2018-08-11 16:28:00 --> Controller Class Initialized
DEBUG - 2018-08-11 16:28:00 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 16:28:00 --> Email Class Initialized
INFO - 2018-08-11 16:28:00 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 16:28:00 --> Helper loaded: cookie_helper
INFO - 2018-08-11 16:28:00 --> Helper loaded: language_helper
INFO - 2018-08-11 16:28:00 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 16:28:00 --> Model Class Initialized
INFO - 2018-08-11 16:28:00 --> Helper loaded: date_helper
INFO - 2018-08-11 21:28:00 --> Form Validation Class Initialized
INFO - 2018-08-11 21:28:00 --> Model Class Initialized
INFO - 2018-08-11 16:28:02 --> Config Class Initialized
INFO - 2018-08-11 16:28:02 --> Hooks Class Initialized
DEBUG - 2018-08-11 16:28:02 --> UTF-8 Support Enabled
INFO - 2018-08-11 16:28:02 --> Utf8 Class Initialized
INFO - 2018-08-11 16:28:02 --> URI Class Initialized
INFO - 2018-08-11 16:28:02 --> Router Class Initialized
INFO - 2018-08-11 16:28:02 --> Output Class Initialized
INFO - 2018-08-11 16:28:02 --> Security Class Initialized
DEBUG - 2018-08-11 16:28:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 16:28:02 --> Input Class Initialized
INFO - 2018-08-11 16:28:02 --> Language Class Initialized
INFO - 2018-08-11 16:28:02 --> Language Class Initialized
INFO - 2018-08-11 16:28:02 --> Config Class Initialized
INFO - 2018-08-11 16:28:02 --> Loader Class Initialized
INFO - 2018-08-11 16:28:02 --> Helper loaded: security_helper
INFO - 2018-08-11 16:28:02 --> Helper loaded: form_helper
INFO - 2018-08-11 16:28:02 --> Helper loaded: url_helper
INFO - 2018-08-11 16:28:02 --> Helper loaded: global_helper
INFO - 2018-08-11 16:28:02 --> Helper loaded: inflector_helper
INFO - 2018-08-11 16:28:02 --> Helper loaded: text_helper
INFO - 2018-08-11 16:28:02 --> Database Driver Class Initialized
INFO - 2018-08-11 16:28:02 --> Model Class Initialized
INFO - 2018-08-11 16:28:02 --> Controller Class Initialized
DEBUG - 2018-08-11 16:28:02 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 16:28:02 --> Email Class Initialized
INFO - 2018-08-11 16:28:02 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 16:28:02 --> Helper loaded: cookie_helper
INFO - 2018-08-11 16:28:02 --> Helper loaded: language_helper
INFO - 2018-08-11 16:28:02 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 16:28:02 --> Model Class Initialized
INFO - 2018-08-11 16:28:02 --> Helper loaded: date_helper
INFO - 2018-08-11 21:28:02 --> Form Validation Class Initialized
INFO - 2018-08-11 21:28:02 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 21:28:02 --> Model Class Initialized
DEBUG - 2018-08-11 21:28:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 21:28:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/auth/views/login.php
DEBUG - 2018-08-11 21:28:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 21:28:02 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 21:28:02 --> Final output sent to browser
DEBUG - 2018-08-11 21:28:02 --> Total execution time: 0.2349
INFO - 2018-08-11 16:28:31 --> Config Class Initialized
INFO - 2018-08-11 16:28:31 --> Hooks Class Initialized
DEBUG - 2018-08-11 16:28:31 --> UTF-8 Support Enabled
INFO - 2018-08-11 16:28:31 --> Utf8 Class Initialized
INFO - 2018-08-11 16:28:31 --> URI Class Initialized
DEBUG - 2018-08-11 16:28:31 --> No URI present. Default controller set.
INFO - 2018-08-11 16:28:31 --> Router Class Initialized
INFO - 2018-08-11 16:28:31 --> Output Class Initialized
INFO - 2018-08-11 16:28:31 --> Security Class Initialized
DEBUG - 2018-08-11 16:28:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 16:28:31 --> Input Class Initialized
INFO - 2018-08-11 16:28:31 --> Language Class Initialized
INFO - 2018-08-11 16:28:31 --> Language Class Initialized
INFO - 2018-08-11 16:28:31 --> Config Class Initialized
INFO - 2018-08-11 16:28:31 --> Loader Class Initialized
INFO - 2018-08-11 16:28:31 --> Helper loaded: security_helper
INFO - 2018-08-11 16:28:31 --> Helper loaded: form_helper
INFO - 2018-08-11 16:28:31 --> Helper loaded: url_helper
INFO - 2018-08-11 16:28:31 --> Helper loaded: global_helper
INFO - 2018-08-11 16:28:31 --> Helper loaded: inflector_helper
INFO - 2018-08-11 16:28:31 --> Helper loaded: text_helper
INFO - 2018-08-11 16:28:31 --> Database Driver Class Initialized
INFO - 2018-08-11 16:28:31 --> Model Class Initialized
INFO - 2018-08-11 16:28:31 --> Controller Class Initialized
DEBUG - 2018-08-11 16:28:31 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 16:28:31 --> Email Class Initialized
INFO - 2018-08-11 16:28:31 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 16:28:31 --> Helper loaded: cookie_helper
INFO - 2018-08-11 16:28:31 --> Helper loaded: language_helper
INFO - 2018-08-11 16:28:31 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 16:28:31 --> Model Class Initialized
INFO - 2018-08-11 16:28:31 --> Helper loaded: date_helper
INFO - 2018-08-11 21:28:31 --> Model Class Initialized
INFO - 2018-08-11 21:28:31 --> Form Validation Class Initialized
DEBUG - 2018-08-11 21:28:31 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/settings/models/Settings_model.php
INFO - 2018-08-11 21:28:31 --> Model Class Initialized
DEBUG - 2018-08-11 21:28:32 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
INFO - 2018-08-11 16:28:42 --> Config Class Initialized
INFO - 2018-08-11 16:28:42 --> Hooks Class Initialized
DEBUG - 2018-08-11 16:28:42 --> UTF-8 Support Enabled
INFO - 2018-08-11 16:28:42 --> Utf8 Class Initialized
INFO - 2018-08-11 16:28:42 --> URI Class Initialized
INFO - 2018-08-11 16:28:42 --> Router Class Initialized
INFO - 2018-08-11 16:28:42 --> Output Class Initialized
INFO - 2018-08-11 16:28:42 --> Security Class Initialized
DEBUG - 2018-08-11 16:28:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 16:28:42 --> Input Class Initialized
INFO - 2018-08-11 16:28:42 --> Language Class Initialized
INFO - 2018-08-11 16:28:42 --> Language Class Initialized
INFO - 2018-08-11 16:28:42 --> Config Class Initialized
INFO - 2018-08-11 16:28:42 --> Loader Class Initialized
INFO - 2018-08-11 16:28:42 --> Helper loaded: security_helper
INFO - 2018-08-11 16:28:42 --> Helper loaded: form_helper
INFO - 2018-08-11 16:28:42 --> Helper loaded: url_helper
INFO - 2018-08-11 16:28:42 --> Helper loaded: global_helper
INFO - 2018-08-11 16:28:42 --> Helper loaded: inflector_helper
INFO - 2018-08-11 16:28:42 --> Helper loaded: text_helper
INFO - 2018-08-11 16:28:42 --> Database Driver Class Initialized
INFO - 2018-08-11 16:28:42 --> Model Class Initialized
INFO - 2018-08-11 16:28:42 --> Controller Class Initialized
DEBUG - 2018-08-11 16:28:42 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 16:28:42 --> Email Class Initialized
INFO - 2018-08-11 16:28:42 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 16:28:42 --> Helper loaded: cookie_helper
INFO - 2018-08-11 16:28:42 --> Helper loaded: language_helper
INFO - 2018-08-11 16:28:42 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 16:28:42 --> Model Class Initialized
INFO - 2018-08-11 16:28:42 --> Helper loaded: date_helper
INFO - 2018-08-11 21:28:42 --> Form Validation Class Initialized
INFO - 2018-08-11 21:28:42 --> Language file loaded: language/english/auth_lang.php
INFO - 2018-08-11 21:28:42 --> Model Class Initialized
DEBUG - 2018-08-11 21:28:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/header.php
DEBUG - 2018-08-11 21:28:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/modules/auth/views/login.php
DEBUG - 2018-08-11 21:28:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/footer.php
DEBUG - 2018-08-11 21:28:42 --> File loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/views/template/site/site-template.php
INFO - 2018-08-11 21:28:42 --> Final output sent to browser
DEBUG - 2018-08-11 21:28:42 --> Total execution time: 0.1776
INFO - 2018-08-11 19:31:18 --> Config Class Initialized
INFO - 2018-08-11 19:31:18 --> Hooks Class Initialized
DEBUG - 2018-08-11 19:31:18 --> UTF-8 Support Enabled
INFO - 2018-08-11 19:31:18 --> Utf8 Class Initialized
INFO - 2018-08-11 19:31:18 --> URI Class Initialized
DEBUG - 2018-08-11 19:31:18 --> No URI present. Default controller set.
INFO - 2018-08-11 19:31:18 --> Router Class Initialized
INFO - 2018-08-11 19:31:18 --> Output Class Initialized
INFO - 2018-08-11 19:31:18 --> Security Class Initialized
DEBUG - 2018-08-11 19:31:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-08-11 19:31:18 --> Input Class Initialized
INFO - 2018-08-11 19:31:18 --> Language Class Initialized
INFO - 2018-08-11 19:31:18 --> Language Class Initialized
INFO - 2018-08-11 19:31:18 --> Config Class Initialized
INFO - 2018-08-11 19:31:18 --> Loader Class Initialized
INFO - 2018-08-11 19:31:18 --> Helper loaded: security_helper
INFO - 2018-08-11 19:31:18 --> Helper loaded: form_helper
INFO - 2018-08-11 19:31:18 --> Helper loaded: url_helper
INFO - 2018-08-11 19:31:18 --> Helper loaded: global_helper
INFO - 2018-08-11 19:31:18 --> Helper loaded: inflector_helper
INFO - 2018-08-11 19:31:18 --> Helper loaded: text_helper
INFO - 2018-08-11 19:31:18 --> Database Driver Class Initialized
INFO - 2018-08-11 19:31:18 --> Model Class Initialized
INFO - 2018-08-11 19:31:18 --> Controller Class Initialized
DEBUG - 2018-08-11 19:31:18 --> Config file loaded: /homepages/10/d731904314/htdocs/dhoondloo/cl_os/cl_os/application/config/ion_auth.php
INFO - 2018-08-11 19:31:18 --> Email Class Initialized
INFO - 2018-08-11 19:31:18 --> Language file loaded: language/english/ion_auth_lang.php
INFO - 2018-08-11 19:31:18 --> Helper loaded: cookie_helper
INFO - 2018-08-11 19:31:18 --> Helper loaded: language_helper
INFO - 2018-08-11 19:31:18 --> Session: Class initialized using 'database' driver.
INFO - 2018-08-11 19:31:18 --> Model Class Initialized
INFO - 2018-08-11 19:31:18 --> Helper loaded: date_helper
