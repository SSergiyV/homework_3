<?php

namespace classes;

class Logger
{
    private string $format;
    private string $delivery;

    public function __construct($format, $delivery)
    {
        $this->format   = $format;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
        $this->deliver($this->format($string));
    }

    public function format($string)
    {
        switch ($this->format) {
            case 'raw' :
                {
                    return $string;
                }
                break;
            case 'with_date':
                {
                    return date('Y-m-d H:i:s') . $string;
                }
                break;
            case 'with_date_and_details':
                {
                    return date('Y-m-d H:i:s') . $string . ' - With some details';
                }
                break;
            default:
            {
                die('Error format');
            }
        }
    }

    public function deliver($format)
    {
        switch ($this->delivery) {
            case 'by_email' :
                {
                    echo "Вивід формату ({$format}) по имейл";
                }
                break;
            case 'by_sms':
                {
                    echo "ивід формату ({$format}) в смс";
                }
                break;
            case 'to_console':
                {
                    echo "ивід формату ({$format}) в консоль";
                }
                break;
            default:
            {
                die('Error deliver');
            }
        }
    }
}