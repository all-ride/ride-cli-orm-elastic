# Ride: ORM Elastic CLI

This module adds various CLI commands for the Elastic integration of the Ride ORM.

## Commands

### orm elastic define

This command maps the ORM models to the needed indices in Elastic search.

You need to run this command the first time you implement this module and then when you have altered a model definition which is integrated in Elastic.

**Syntax**: ```orm elastic define```

**Alias**: ```oed```

### orm generate

This command indexes the existing ORM entries into Elastic

**Syntax**: ```orm elastic index [<model>]```
- ```<model>```: Name of the model to index, omit to index all models which have Elastic enabled

**Alias**: ```oei```

## Related Modules 

- [ride/app](https://github.com/all-ride/ride-app)
- [ride/app-elastic](https://github.com/all-ride/ride-app-elastic)
- [ride/app-orm](https://github.com/all-ride/ride-app-orm)
- [ride/app-orm-elastic](https://github.com/all-ride/ride-app-orm-elastic)
- [ride/cli](https://github.com/all-ride/ride-cli)
- [ride/lib-cli](https://github.com/all-ride/ride-lib-cli)
- [ride/lib-orm](https://github.com/all-ride/ride-lib-system)

## Installation

You can use [Composer](http://getcomposer.org) to install this application.

```
composer require ride/cli-orm-elastic
```
