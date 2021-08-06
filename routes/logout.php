<?php

unset($_SESSION['connected']);
unset($_SESSION['user_id']);

header('Location: /login');