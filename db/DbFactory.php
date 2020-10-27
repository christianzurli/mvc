<?php


namespace App\DB;

use http\Exception\InvalidArgumentException;

class DbFactory{
    public static function create(array $options) {
        if (!array_key_exists('dsn', $options)) {
            if (!array_key_exists('driver', $options)) {
                throw new \Exception(InvalidArgumentException('Nessun driver selezionato'));
            }
            if (!array_key_exists('charset', $options)) {
                $options['charset'] = 'utf8';
            }
            $dsn = '';
            switch ($options['driver']) {
                case 'mysql':
                case 'mssql':
                case 'oracle':
                    $dsn = $options['driver'] . ':host=' . $options['host'] . ';';
                    $dsn .= 'dbname=' . $options['database'] . ';charset=' . $options['database'];
                    break;
                case 'sqlite':
                    $dsn = 'sqllite:' . $options['database'];
                    break;
                default:
                    throw new \Exception(InvalidArgumentException('Nessun driver impostato'));
            }
            $options['dsn'] = $dsn;
        }
        //passo i valori al singleton
        return DbPDO::getInstance($options);
    }
}