<?php
    require_once ('classes/DB.php');
    require_once 'vendor/autoload.php';
    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader, [
        'debug' => true,
        // ...
    ]);
    $twig->addExtension(new \Twig\Extension\DebugExtension());
    $db = DB::getDBConnection();
    $sql = 'SELECT id, givenName, lastName, email, studyProgram FROM student';
    $stmt = $db->prepare($sql);
    $result = $stmt->execute(array());
    if ($result) {
      $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
      echo $twig->render('students.html', array('students' => $students));
      //var_dump($students);
    } else {
        echo $twig->render('error.html',(array('status'=>'FAIL', 'msg'=>'Unable to get users', 'status'=>$stmt->errorInfo())));
    }
?>