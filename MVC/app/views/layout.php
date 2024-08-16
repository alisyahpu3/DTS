<!DOCTYPE html>
<html>
    <head>
<title>MVC app</title>
</head>
<body>
</body>
</html>
<<h1>Welcome to Home Page</h1>
<h2>User : </h2>
<ul>
    <?php if (isset($users) && is_array($users)): ?>
        <?php foreach ($users as $user): ?>
            <li><?php echo htmlspecialchars($user['name']); ?></li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>No users available.</li>
    <?php endif; ?>
</ul>
