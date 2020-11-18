<html>
    <head>
        <title>
            ENTENDENDO ESTRUTURAS DE REPETIÇÃO
        </title>
    </head>
    <body>
    <h3>
        Exemplo de array e listas
    </h3>
    <ul>
        <?php
        $i = 0;
        while ($i < 5) {
        ?>
            <li><?=$i?></li>
        <?php
            $i++;
        }
        ?>
    </ul>

    <hr>

    <?php
        $arrayExemploBanco = [
            [
                'title' => 'Array teste 01'
            ],
            [
                'title' => 'Array xablau'
            ],
            [
                'title' => 'SANTAAA CRUZ'
            ]
        ];

        $meuArrayPHP = array(
                "xablau" => "pode ser uma string",
                "array_mais" => [
                        "valor" => "xablau zero 01",
                        "outro_item" => [
                                "id" => 1
                        ]
                ]
        );

        $cidadeExemplo = [
            'chave' => 'valor',
            'teste2'
        ];
    ?>

    <table style="width: 100%;">
        <thead style="background-color: gainsboro;">
            <tr>
                <th>
                    <strong>TITLE</strong>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($arrayExemploBanco as $item):
            ?>
            <tr>
                <td style="border: 1px solid black;"><?=$item['title']?></td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>


    </body>
</html>
