<?php require_once 'includes/header.php'; ?>


<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Student Directory Management</h1>
        <a href="index.php?action=add" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Add New Student
            <link rel="stylesheet" href="style.css">
        </a>
    </div>

    <?php if (isset($_SESSION['message'])): ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
            <?= $_SESSION['message']; unset($_SESSION['message']); ?>
        </div>
    <?php endif; ?>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Year</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Program</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($students as $student): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $student['student_id']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <?= $student['first_name']; ?> <?= $student['last_name']; ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $student['year_level']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $student['program']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $student['email']; ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="index.php?action=edit&id=<?= $student['student_id']; ?>" class="text-blue-500 hover:text-blue-700 mr-3">Edit</a>
                        <a href="index.php?action=delete&id=<?= $student['student_id']; ?>" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'includes/header.php'; ?>
