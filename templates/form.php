<?php require_once 'includes/header.php'; 
?>

<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-blue-500 text-white px-6 py-4">
            <h2 class="text-xl font-semibold">
                <?= isset($student['student_id']) ? 'Edit Student' : 'Add New Student'; ?>
            </h2>
            <link rel="stylesheet" href="style.css">
        </div>
        
        <form action="index.php?action=save" method="POST" class="p-6">
            <?php if (isset($student['student_id'])): ?>
                <input type="hidden" name="id" value="<?= $student['student_id']; ?>">
            <?php endif; ?>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="<?= $student['first_name'] ?? ''; ?>" 
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="<?= $student['last_name'] ?? ''; ?>" 
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="year_level">Year Level</label>
                <select id="year_level" name="year_level" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Select Year Level</option>
                    <option value="First" <?= (isset($student['year_level']) && $student['year_level'] == 'First year') ? 'selected' : ''; ?>>First year</option>
                    <option value="Second" <?= (isset($student['year_level']) && $student['year_level'] == 'Second year') ? 'selected' : ''; ?>>Second year</option>
                    <option value="Third" <?= (isset($student['year_level']) && $student['year_level'] == 'Third year') ? 'selected' : ''; ?>>Third year</option>
                    <option value="Fourth" <?= (isset($student['year_level']) && $student['year_level'] == 'Fourth year') ? 'selected' : ''; ?>>Fourth year</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="program">Program</label>
                <input type="text" id="program" name="program" value="<?= $student['program'] ?? ''; ?>" 
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $student['email'] ?? ''; ?>" 
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            
            <div class="flex justify-end">
                <a href="index.php" class="bg-gray-200 text-gray-700 px-4 py-2 rounded mr-2 hover:bg-gray-300">Cancel</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    <?= isset($student['student_id']) ? 'Update' : 'Save'; ?>
                </button>
            </div>
        </form>
    </div>
</div>

<?php require_once 'includes/header.php'; ?>
