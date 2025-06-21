<?php

namespace App\Domain\Enums;

enum MaterialType: string
{
    case CIMENTO = 'cimento';
    case MADEIRA = 'madeira';
    case FERRAGEM = 'ferragem';
    case ELETRICO = 'eletrico';
    case HIDRAULICO = 'hidraulico';
    case OUTROS = 'outros';
}
