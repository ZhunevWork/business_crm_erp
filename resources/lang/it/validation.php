<?php

return [
    'accepted'                       => ':attribute deve essere accettato.',
    'active_url'                     => ':attribute non è un\'URL valida.',
    'after'                          => ':attribute deve essere una data successiva a :date.',
    'after_or_equal'                 => 'Il :attribute deve essere una data dopo o uguale a :date',
    'alpha'                          => ':attribute può contenere soltanto lettere.',
    'alpha_dash'                     => ':attribute può contenere soltanto lettere, numeri e trattini.',
    'alpha_num'                      => ':attribute può contenere soltanto lettere e numeri-',
    'latin'                          => 'The :attribute may only contain ISO basic Latin alphabet letters.',
    'latin_dash_space'               => 'The :attribute may only contain ISO basic Latin alphabet letters, numbers, dashes, hyphens and spaces.',
    'array'                          => ':attribute deve essere un array.',
    'before'                         => ':attribute deve essere una data antecedente a :date.',
    'before_or_equal'                => ':attribute deve essere una data antecedente o uguale a :date.',
    'between'                        => [
        'numeric' => ':attribute deve essere compreso tra :min e :max.',
        'file'    => ':attribute deve essere compreso tra :min e :max kilobyte.',
        'string'  => ':attribute deve essere compreso tra :min e :max caratteri.',
        'array'   => ':attribute deve avere un numero di elementi compreso tra :min e :max.',
    ],
    'boolean'                        => ':attribute deve essere vero o falso.',
    'confirmed'                      => 'La conferma del campo :attribute non corrisponde.',
    'date'                           => ':attribute non è una data valida.',
    'date_equals'                    => 'The :attribute must be a date equal to :date.',
    'date_format'                    => ':attribute non corrisponde al formato :format.',
    'different'                      => ':attribute e :other devono essere differenti.',
    'digits'                         => ':attribute deve essere di :digits cifre.',
    'digits_between'                 => ':attribute deve essere tra :min e :max cifre.',
    'dimensions'                     => ':attribute ha delle dimensioni immagine non valide.',
    'distinct'                       => ':attribute ha un valore duplicato.',
    'email'                          => ':attribute deve essere un indirizzo email valido.',
    'ends_with'                      => 'The :attribute must end with one of the following: :values.',
    'exists'                         => 'La selezione di :attribute non è valida.',
    'file'                           => ':attribute deve essere un file.',
    'filled'                         => ':attribute è obbligatorio.',
    'gt'                             => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte'                            => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'                          => ':attribute deve essere un\'immagine.',
    'in'                             => 'La selezione di :attribute non è valida.',
    'in_array'                       => 'Il campo :attribute non esiste in :other.',
    'integer'                        => ':attribute deve essere un numero intero.',
    'ip'                             => ':attribute deve essere un indirizzo IP valido.',
    'ipv4'                           => ':attribute deve essere un indirizzo IPv4 valido.',
    'ipv6'                           => ':attribute deve essere un indirizzo IPv6 valido.',
    'json'                           => ':attribute deve essere una stringa JSON valida.',
    'lt'                             => [
        'numeric' => ':attribute deve essere inferiore a :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => ':attribute deve avere un numero di caratteri minore di :value.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte'                            => [
        'numeric' => ':attribute deve essere inferiore o uguale a :value.',
        'file'    => ':attribute deve essere inferiore o uguale a :value kilobyte.',
        'string'  => ':attribute non può avere un numero di caratteri minore o uguale a :value.',
        'array'   => ':attribute deve essere inferiore a :value articoli.',
    ],
    'max'                            => [
        'numeric' => ':attribute non deve essere superiore a :max.',
        'file'    => ':attribute non deve essere superiore a :max kilobyte.',
        'string'  => ':attribute non deve essere superiore a :max caratteri.',
        'array'   => ':attribute non deve avere più di :max elementi.',
    ],
    'mimes'                          => ':attribute deve essere un file di tipo: :values.',
    'mimetypes'                      => ':attribute deve essere un file di tipo: :values.',
    'min'                            => [
        'numeric' => ':attribute deve essere almeno :min.',
        'file'    => ':attribute deve essere almeno :min kilobyte.',
        'string'  => ':attribute deve essere almeno :min caratteri.',
        'array'   => ':attribute non deve avere meno di :min elementi.',
    ],
    'not_in'                         => 'La selezione di :attribute non è valida.',
    'not_regex'                      => 'Il formato di :attribute non è valido.',
    'numeric'                        => ':attribute deve essere un numero.',
    'password'                       => 'La password non è corretta.',
    'present'                        => ':attribute deve essere presente.',
    'regex'                          => 'Il formato di :attribute non è valido.',
    'required'                       => ':attribute è obbligatorio.',
    'required_if'                    => ':attribute è obbligatorio quando :other è :value.',
    'required_unless'                => ':attribute è obbligatorio a meno che :other sia :value.',
    'required_with'                  => ':attribute è obbligatorio quando :value è presente.',
    'required_with_all'              => ':attribute è obbligatorio quando :value sono presenti.',
    'required_without'               => ':attribute è obbligatorio quando :value non è presente.',
    'required_without_all'           => ':attribute è obbligatorio quando :values non sono presenti.',
    'same'                           => ':attribute e :other devono corrispondere.',
    'size'                           => [
        'numeric' => ':attribute deve essere :size.',
        'file'    => ':attribute deve essere :size kilobyte.',
        'string'  => ':attribute deve essere :size caratteri.',
        'array'   => ':attribute deve avere :size elementi.',
    ],
    'starts_with'                    => 'The :attribute must start with one of the following: :values.',
    'string'                         => ':attribute deve essere una stringa di testo.',
    'timezone'                       => ':attribute deve essere una zona valida.',
    'unique'                         => ':attribute è già stato utilizzato.',
    'uploaded'                       => ':attribute impossibile caricare.',
    'url'                            => 'Il formato di :attribute non è valido.',
    'uuid'                           => 'The :attribute must be a valid UUID.',
    'custom'                         => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => ':attribute contiene parole riservate.',
    'dont_allow_first_letter_number' => 'Il campo \": input\" deve iniziare con una lettera e non come un numero',
    'exceeds_maximum_number'         => ':attribute supera la lunghezza massima del modello',
    'db_column'                      => ':attribute può contenere solo lettere dell\'alfabeto latino ISO, numeri, trattino e non può iniziare con il numero.',
    'attributes'                     => [],
];
