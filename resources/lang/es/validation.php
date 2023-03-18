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

    'accepted' => ':attribute debe ser aceptado.',
    'accepted_if' => ':attribute debe ser aceptado si :other es :value.',
    'active_url' => ':attribute no es una URL válida.',
    'after' => ':attribute debe ser después de :date.',
    'after_or_equal' => ':attribute debe ser después de o igual a :date.',
    'alpha' => ':attribute solo puede contener letras.',
    'alpha_dash' => ':attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => ':attribute solo puede contener letras y números.',
    'array' => ':attribute debe ser un array.',
    'before' => ':attribute debe ser antes de :date.',
    'before_or_equal' => ':attribute debe ser antes de o igual :date.',
    'between' => [
        'numeric' => ':attribute debe estar entre :min y :max.',
        'file' => 'El tamaño de :attribute debe estar entre :min y :max kilobytes.',
        'string' => ':attribute debe tener una longitud de entre :min y :max caracteres.',
        'array' => ':attribute debe tener entre :min y :max elementos.',
    ],
    'boolean' => ':attribute debe ser verdadero o falso.',
    'confirmed' => ':attribute y su confirmación no coinciden.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => ':attribute no es una fecha válida.',
    'date_equals' => ':attribute debe ser una fecha igual a :date.',
    'date_format' => ':attribute debe tener el formato :format.',
    'declined' => ':attribute debe ser rechazado.',
    'declined_if' => ':attribute debe ser rechazado si :other es :value.',
    'different' => ':attribute y :other deben ser diferentes.',
    'digits' => ':attribute deben tener :digits dígitos de longitud.',
    'digits_between' => ':attribute debe tener entre :min y :max dígitos de longitud.',
    'dimensions' => ':attribute tiene dimensiones inválidas.',
    'distinct' => ':attribute tiene un valor duplicado.',
    'email' => ':attribute no es un correo válido.',
    'ends_with' => ':attribute debe terminar con uno de los siguientes: :values.',
    'enum' => ':attribute seleccionado es inválido.',
    'exists' => ':attribute seleccionado es inválido.',
    'file' => ':attribute debe ser un archivo.',
    'filled' => ':attribute debe tener un valor.',
    'gt' => [
        'numeric' => ':attribute debe ser mayor a :value.',
        'file' => 'El tamaño de :attribute debe ser mayor a :value kilobytes.',
        'string' => ':attribute debe tener más de :value caracteres.',
        'array' => ':attribute debe tener más de :value elementos.',
    ],
    'gte' => [
        'numeric' => ':attribute debe ser mayor o igual a :value.',
        'file' => 'El tamaño de :attribute debe ser mayor o igual a :value kilobytes.',
        'string' => ':attribute debe tener :value caracteres o más.',
        'array' => ':attribute debe tener :value elementos o más.',
    ],
    'image' => ':attribute debe ser una imagen.',
    'in' => ':attribute seleccionado es inválido.',
    'in_array' => ':attribute no existe en :other.',
    'integer' => ':attribute debe ser un número entero.',
    'interval' => 'El intervalo máximo entre :attribute y :other es de :interval :unit.',
    'ip' => ':attribute debe ser una dirección IP válida.',
    'ipv4' => ':attribute debe ser una dirección IPv4 válida.',
    'ipv6' => ':attribute debe ser una dirección IPv6 válida.',
    'json' => ':attribute debe ser una cadena de JSON válida.',
    'lt' => [
        'numeric' => ':attribute debe ser menor a :value.',
        'file' => 'El tamaño de :attribute debe ser menor a :value kilobytes.',
        'string' => ':attribute debe tener menos de :value caracteres.',
        'array' => ':attribute debe tener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => ':attribute debe ser menor o igual a :value.',
        'file' => 'El tamaño de :attribute debe ser menor o igual a :value kilobytes.',
        'string' => ':attribute debe tener :value caracteres o menos.',
        'array' => ':attribute debe tener :value elementos o menos.',
    ],
    'mac_address' => ':attribute debe ser una dirección MAC válida.',
    'max' => [
        'numeric' => ':attribute no debe ser mayor a :max.',
        'file' => 'El tamaño de :attribute no debe ser mayor a :max kilobytes.',
        'string' => ':attribute tiene un máximo de :max caracteres.',
        'array' => ':attribute tiene un máximo de :max elementos.',
    ],
    'mimes' => ':attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => ':attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => ':attribute no debe ser menor a :min.',
        'file' => 'El tamaño de :attribute no debe ser menor a :min kilobytes.',
        'string' => ':attribute tiene un mínimo de :min caracteres.',
        'array' => ':attribute tiene un mínimo de :min elementos.',
    ],
    'multiple_of' => ':attribute debe ser un múltiplo de :value.',
    'not_in' => ':attribute seleccionado es inválido.',
    'not_regex' => 'El formato de :attribute es inválido.',
    'numeric' => ':attribute debe ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El campo :attribute debe estar presente.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido si :other es :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other sea in :values.',
    'prohibits' => 'El campo :attribute prohíbe que :other esté presente.',
    'regex' => 'El formato de :attribute es inválido.',
    'required' => ':attribute es requerido.',
    'required_array_keys' => ':attribute debe contener entradas de: :values.',
    'required_if' => ':attribute es requerido si :other es :value.',
    'required_unless' => ':attribute es requerido a menos que :other sea :values.',
    'required_with' => ':attribute es requerido si los alguno de los campos :values está presente.',
    'required_with_all' => ':attribute es requerido si todos los campos :values están presentes.',
    'required_without' => ':attribute es requerido si algunos de los campos :values no está presente.',
    'required_without_all' => ':attribute es requerido si ninguno de los campos :values están presentes.',
    'same' => ':attribute y :other deben coincidir.',
    'size' => [
        'numeric' => ':attribute debe ser :size.',
        'file' => 'El tamaño de :attribute debe ser :size kilobytes.',
        'string' => ':attribute debe tener una longitud de :size caracteres.',
        'array' => ':attribute debe contener :size elementos.',
    ],
    'starts_with' => 'The :attribute debe terminar con uno de los siguientes: :values.',
    'string' => ':attribute debe ser una cadena de texto.',
    'timezone' => ':attribute debe ser una zona horaria válida.',
    'unique' => ':attribute ya ha sido usado.',
    'uploaded' => ':attribute no pudo ser subida con éxito.',
    'url' => ':attribute debe ser una URL válida.',
    'uuid' => ':attribute debe ser un UUID válido.',
    'valid_id' => ':attribute seleccionado no es válido.',

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
        'email' => [
            'unique' => 'Ya existe una cuenta con este correo.',
        ],
        'ci' => [
            'unique' => 'Ya existe una cuenta con esta cédula.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        // User attributes
        'first_name' => 'el primer nombre',
        'second_name' => 'el segundo nombre',
        'first_lastname' => 'el primer apellido',
        'second_lastname' => 'el segundo apellido',
        'ci' => 'la cédula',
        'ci_type' => 'el tipo de cédula',
        'email' => 'el correo electrónico',
        'birth' => 'la fecha de nacimiento',
        'password' => 'la contraseña',
        'password_confirmation' => 'la confirmación de contraseña',
        'grade' => 'el grado de instrucción',
        'gender' => 'el sexo',
        'image' => 'la imagen',
        'phone' => 'el teléfono',
        'address' => 'la dirección',
        'degree' => 'la titulación',
        
        // Course and Club attributes
        'name' => 'el nombre',
        'description' => 'la descripción',
        'total_price' => 'el monto total',
        'reserv_price' => 'el monto de reserva',
        'start_ins' => 'inicio de inscripciones',
        'end_ins' => 'fin de inscripciones',
        'start_course' => 'inicio del curso',
        'end_course' => 'fin del curso',
        'duration' => 'la duración',
        'student_limit' => 'el límite de estudiantes',
        'days' => 'los días',
        'start_hour' => 'la hora de inicio',
        'end_hour' => 'la hora de cierre',
        'day' => 'el día',

        // Item attributes
        'code' => 'el código',

        // Operation attributes
        'reason' => 'la descripción',
        
        // Enrollment attributes
        'confirmed_at' => 'la fecha de confirmación',
        'approval' => 'la aprobación',
        
        // Payment attributes
        'amount' => 'el monto',
        'status' => 'el estado',
        'ref' => 'la referencia',
        'type' => 'el tipo de pago',
        'category' => 'la categoría',

        // Credentials attributes
        'bank' => 'el banco',
        'account' => 'el número de cuenta',

        // PNF attributes
        'leader' => 'el Jefe de Departamento',

        // Area attributes
        'area_name' => 'el nombre',

        // Foreign key attributes
        'user_id' => 'el usuario',
        'area_id' => 'el área',
        'pnf_id' => 'el PNF',
        'item_id' => 'el artículo',
        'club_id' => 'el club',
        'enrollment_id' => 'la matrícula',
        'payment_id' => 'el pago',

        // Backup attributes
        'backup' => 'el archivo de respaldo',
    ],

    'values' => [
        'birth' => [
            'now' => 'la fecha actual',
        ],
        'start_course' => [
            'now' => 'la fecha actual',
        ],
        'end_course' => [
            'now' => 'la fecha actual',
        ],
        'start_ins' => [
            'now' => 'la fecha actual',
        ],
        'end_ins' => [
            'now' => 'la fecha actual',
        ],
    ],
];
