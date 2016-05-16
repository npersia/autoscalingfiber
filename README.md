# PHP Welcome Page

This is an example PHP application you can use to test your OSEv3 environment.

Here is an example:
```
user@host$ oc new-app openshift/php~https://github.com/RedHatWorkshops/welcome-php.git
```

Things to keep in mind:
* `ose new-app` Creates a new application on OSE3
* `openshift/php` This tells OSEv3 to use the PHP image stream provided by OSE
* Provide the git URL for the project
  * Syntax is "imagestream~souce"

Once you created the app, start your build

```
user@host$ oc start-build welcome-php
```

Once the build completes; create and add your route:
```
user@host$ oc expose svc welcome-php --hostname=welcome-php.cloudapps.example.com
```

Scale up as you wish
```
user@host$ oc scale --replicas=3 dc/welcome-php
```

If you'd like to add another route (aka "alias"); then you need to specify a new name for it

```
user@host$ oc expose svc welcome-php --name=hello-openshift --hostname=hello-openshift.cloudapps.example.com
```
