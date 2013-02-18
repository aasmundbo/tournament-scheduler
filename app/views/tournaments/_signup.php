<h3>Meld på lag:</h3>
<?php

if ($isUserSignedup) {
    $this->render_view('tournaments/signup/_signup_registered', array('locals' =>
    array('tournament' => $tournament,
        'current_user' => $current_user)));

} elseif ($current_user->ID == 0) {
    $this->render_view('tournaments/signup/_signup_not_logged_in', array('locals' =>
    array('tournament' => $tournament,
        'current_user' => $current_user)));
} else {
    $this->render_view('tournaments/signup/_signup_not_registered', array('locals' =>
    array('tournament' => $tournament,
        'current_user' => $current_user,
        'adminUrl', $adminUrl,
        'availablePlayers' => $availablePlayers)));
}
?>

