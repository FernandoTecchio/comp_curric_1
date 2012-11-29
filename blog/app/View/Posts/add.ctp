
<h1>Adicionando Postagenm</h1>


    <?php

    # crinado o formulario atravez do ajudante Foem
    echo $this->Form->create('Post');

    # gerando os inputs atraves do ajudante Form
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows'=>'3'));

    # fechando o formulario e gerando o botão Submit
    echo $this->Form->end("Enviar");


 ?>




