<?php 
    //Loggin In 
    $template = (object)[];
    echo $OUTPUT->render_from_template('local_manuals/logginin', $template);

    //Resetting Password or Forgotten Username
    $template = (object)[];
    echo $OUTPUT->render_from_template('local_manuals/resetting', $template);

    //Accepting Policies
    $template = (object)[];
    echo $OUTPUT->render_from_template('local_manuals/acceptpolicy', $template);
?>
