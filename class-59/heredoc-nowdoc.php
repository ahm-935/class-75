<?php

$name = "Mina";
echo <<<HEREDOC
    <p> lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. 
    Sed sit amet ipsum mauris. Maecenas conguur 
    ante hendrerit. Donec et mollis dolor. </p>
    <p>Praesent et diam eget libero egestas mattis
     sit am enim, ut porta lorem lacinia consectetur.
      Donec ut libero sed arcu vehicula ultricies a non tortor.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem.
      Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.</p>
    <p> {$name} is a good student. </p>
    <p> {$name} is a good student. </p>
    HEREDOC;
echo <<<'NOWDOC'
    <p> lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. 
    Sed sit amet ipsum mauris. Maecenas conguur 
    ante hendrerit. Donec et mollis dolor. </p>
    <p>Praesent et diam eget libero egestas mattis
     sit am enim, ut porta lorem lacinia consectetur.
      Donec ut libero sed arcu vehicula ultricies a non tortor.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem.
      Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.</p>
    <p> {$name} is a good student. </p>
    <p> {$name} is a good student. </p>
    NOWDOC;

?>