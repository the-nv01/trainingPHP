<?php
$users = [['id' => 1, 'name' => 'A'],
    ['id' => 2, 'name' => 'B'],
    ['id' => 3, 'name' => 'C'],
    ['id' => 4, 'name' => 'D']];

$posts = [['user_id' => 3, 'name' => 'Post 1'],
    ['user_id' => 2, 'name' => 'Post 2'],
    ['user_id' => 1, 'name' => 'Post 3'],
    ['user_id' => 4, 'name' => 'Post 4']];

$result = [];
foreach ($users as $user) {
    foreach ($posts as $post) {
        if ($post['user_id'] === $user['id']) {
            array_push($result, ['id' => $user['id'], 'name' => $user['name'], 'post_name' => $post['name']]);
            continue 2;
        }
    }
}

print_r($result);