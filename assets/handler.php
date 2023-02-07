<?php
require_once('connexion.php');
?>

<?php
/**
 *We need to analyze URL request (GET) to determine if we want to get messages or to write them.
 */

$task = "list";

if (array_key_exists("task", $_GET)) {
  $task = $_GET['task'];
}

if ($task == "write") {
  postMessage();
} else {
  getMessages();
}

/**
 * if we want to get them, we need to send JSON.
 */
function getMessages()
{
  global $db;

  // 1.We ask the database to get the 20 last messages.
  $resultats = $db->query("SELECT * FROM messages ORDER BY created_at DESC LIMIT 20");
  // 2. Executing the results.
  $messages = $resultats->fetchAll();
  // 3. Print data in JSON format.
  echo json_encode($messages);
}
/**
 *If we want to write, we need to analyze the POST sent settingsand save them in the database.
 */
function postMessage()
{
  global $db;
  // 1. Analyze POST settings (user, message)

  if (!array_key_exists('user', $_POST) || !array_key_exists('content', $_POST)) {

    echo json_encode(["status" => "error", "message" => "One field or many have not been sent"]);
    return;
  }

  $user = $_POST['user'];
  $content = $_POST['content'];

  // 2. Create a request which can insert these datas.
  $query = $db->prepare('INSERT INTO messages SET user = :user, content = :content, created_at = NOW()');

  $query->execute([
    "user" => $user,
    "content" => $content
  ]);

  // 3. Give a success or error status in JSON format.
  echo json_encode(["status" => "success"]);
}
?>