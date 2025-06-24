let studentId = 1;

function toggleForm() {
    const form = document.getElementById('studentForm');
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
}

function addStudent(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value;
    const year = document.getElementById('year').value;
    const program = document.getElementById('program').value;
    const email = document.getElementById('email').value;

    const studentList = document.getElementById('studentList');
    const row = studentList.insertRow();

    row.innerHTML = `
        <td>${studentId++}</td>
        <td>${name}</td>
        <td>${year}</td>
        <td>${program}</td>
        <td>${email}</td>
        <td>
            <button onclick="editStudent(this)">Edit</button>
            <button onclick="deleteStudent(this)">Delete</button>
        </td>
    `;

    document.getElementById('form').reset();
    toggleForm();
}

function editStudent(button) {
    // Implement edit functionality here
}

function deleteStudent(button) {
    const row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
}
