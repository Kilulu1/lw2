/**
 * Группирует имена пользователей по их ролям.
 *
 * @param array $users Массив пользователей, где каждый элемент — ассоциативный массив с ключами 'name' и 'role'.
 * @return array Ассоциативный массив, где ключи — роли, а значения — массивы имён пользователей.
 */
function groupUsersByRole(array $users): array {
    $result = [];

    foreach ($users as $user) {
        $role = $user['role'] ?? '';
        $name = $user['name'] ?? '';

        if ($role !== '' && $name !== '') {
            $result[$role][] = $name;
        }
    }

    return $result;
}

$users = [
    ['name' => 'Ivan', 'role' => 'admin'],
    ['name' => 'Petr', 'role' => 'user'],
    ['name' => 'Anna', 'role' => 'admin'],
];

print_r(groupUsersByRole($users));