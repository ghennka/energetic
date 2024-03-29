<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Câmpul :attribute trebuie să fie acceptat.',
    'active_url'           => 'Câmpul :attribute nu este un URL valid.',
    'after'                => 'Câmpul :attribute trebuie să fie o dată după :date.',
    'alpha'                => 'Câmpul :attribute poate conține doar litere.',
    'alpha_dash'           => 'Câmpul :attribute poate conține doar litere, numere și cratime.',
    'alpha_num'            => 'Câmpul :attribute poate conține doar litere și numere.',
    'array'                => 'Câmpul :attribute trebuie să fie un array.',
    'before'               => 'Câmpul :attribute trebuie să fie o dată înainte de :date.',
    'between'              => [
        'numeric' => 'Câmpul :attribute trebuie să fie între :min și :max.',
        'file'    => 'Câmpul :attribute trebuie să fie între :min și :max kiloocteți.',
        'string'  => 'Câmpul :attribute trebuie să fie între :min și :max caractere.',
        'array'   => 'Câmpul :attribute trebuie să aibă între :min și :max elemente.',
    ],
    'boolean'              => 'Câmpul :attribute trebuie să fie adevărat sau fals.',
    'confirmed'            => 'Confirmarea :attribute nu se potrivește.',
    'date'                 => 'Câmpul :attribute nu este o dată validă.',
    'date_format'          => 'Câmpul :attribute trebuie să fie în formatul :format.',
    'different'            => 'Câmpurile :attribute și :other trebuie să fie diferite.',
    'digits'               => 'Câmpul :attribute trebuie să aibă :digits cifre.',
    'digits_between'       => 'Câmpul :attribute trebuie să aibă între :min și :max cifre.',
    'email'                => 'Câmpul :attribute trebuie să fie o adresă de e-mail validă.',
    'exists'               => 'Câmpul :attribute selectat nu este valid.',
    'filled'               => 'Câmpul :attribute trebuie completat.',
    'image'                => 'Câmpul :attribute trebuie să fie o imagine.',
    'in'                   => 'Câmpul :attribute selectat nu este valid.',
    'integer'              => 'Câmpul :attribute trebuie să fie un număr întreg.',
    'ip'                   => 'Câmpul :attribute trebuie să fie o adresă IP validă.',
    'json'                 => 'Câmpul :attribute trebuie să fie un string JSON valid.',
    'max'                  => [
        'numeric' => 'Câmpul :attribute nu poate fi mai mare de :max.',
        'file'    => 'Câmpul :attribute nu poate avea mai mult de :max kiloocteți.',
        'string'  => 'Câmpul :attribute nu poate avea mai mult de :max caractere.',
        'array'   => 'Câmpul :attribute nu poate avea mai mult de :max elemente.',
    ],
    'mimes'                => 'Câmpul :attribute trebuie să fie un fișier de tipul: :values.',
    'min'                  => [
        'numeric' => 'Câmpul :attribute nu poate fi mai mic de :min.',
        'file'    => 'Câmpul :attribute trebuie să aibă cel puțin :min kiloocteți.',
        'string'  => 'Câmpul :attribute trebuie să aibă cel puțin :min caractere.',
        'array'   => 'Câmpul :attribute trebuie să aibă cel puțin :min elemente.',
    ],
    'not_in'               => 'Câmpul :attribute selectat nu este valid.',
    'numeric'              => 'Câmpul :attribute trebuie să fie un număr.',
    'regex'                => 'Câmpul :attribute nu are un format valid.',
    'required'             => 'Câmpul :attribute este obligatoriu.',
    'required_if'          => 'Câmpul :attribute este necesar când :other este :value.',
    'required_with'        => 'Câmpul :attribute este necesar când există :values.',
    'required_with_all'    => 'Câmpul :attribute este necesar când există :values.',
    'required_without'     => 'Câmpul :attribute este necesar când nu există :values.',
    'required_without_all' => 'Câmpul :attribute este necesar când niciunul(una) dintre :values nu există.',
    'same'                 => 'Câmpul :attribute și :other trebuie să fie identice.',
    'size'                 => [
        'numeric' => 'Câmpul :attribute trebuie să fie :size.',
        'file'    => 'Câmpul :attribute trebuie să aibă :size kiloocteți.',
        'string'  => 'Câmpul :attribute trebuie să aibă :size caractere.',
        'array'   => 'Câmpul :attribute trebuie să aibă :size elemente.',
    ],
    'string'               => 'Câmpul :attribute trebuie să fie string.',
    'timezone'             => 'Câmpul :attribute trebuie să fie un fus orar valid.',
    'unique'               => 'Câmpul :attribute a fost deja folosit.',
    'url'                  => 'Câmpul :attribute nu este un URL valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
    'attribute-name' => [
        'rule-name' => 'custom-message',
    ],
  ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'Nume',
        'lastname' => 'Prenume',
        'company' => 'Companie sau organizație',
        'email' => 'E-mail',
        'password' => 'Parola',
        'password_confirmation' => 'Parola Confirmare',
        'old_password' => 'Parola veche',
        'new_password' => 'Parola nouă',
        'new_password_confirmation' => 'Confirmă noua parolă',
        'created_at' => 'Creat la',
        'last_updated' => 'Ultima actualizare',
        'actions' => 'Acțiuni',
        'active' => 'Activ',
        'confirmed' => 'Confirmat',
        'send_confirmation_email' => 'Trimite E-mail de confirmare',
        'associated_roles' => 'Drepturi asociate',
        'other_permissions' => 'Alte permisiuni',
        'role_name' => 'Numele dreptului',
        'associated_permissions' => 'Permisiuni asociate',
        'permission_name' => 'Numele permisiunii',
        'display_name' => 'Numele afișat',
        'system_permission' => 'Permisii de sistem?',
    ],

];