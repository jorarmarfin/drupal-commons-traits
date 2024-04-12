<?php

namespace Drupal\CommonsTraits\Traits;

use Exception;

trait HelperFunctionsTrait
{
    /**
     * Calcula la edad a partir de una fecha de nacimiento.
     *
     * @param mixed $date_field
     *   El valor del campo que se espera sea una fecha.
     *
     * @return string|int
     *   La edad calculada o un mensaje de error si el campo no es de tipo fecha.
     * @throws Exception
     */
    public function calculateAge($date_field) {
        // Verifica si el campo es una instancia de DateTime o una cadena de fecha válida
        if ($date_field instanceof \DateTime) {
            $date_of_birth = $date_field;
        } elseif (is_string($date_field) && strtotime($date_field) !== false) {
            $date_of_birth = new \DateTime($date_field);
        } else {
            // No es un campo de fecha válido
            return 'El campo no es de tipo date';
        }

        // Calcula la edad
        $now = new \DateTime();
        $interval = $now->diff($date_of_birth);

        return $interval->y; // Retorna el número de años como la edad
    }

}