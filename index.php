<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="body">
    <div class="container">
        <h2>Hitung Nilai Rata-rata</h2>
        <form id="gradeForm">
            <label for="name">Nama</label> <br>
            <input class="name" type="text" id="name">
            <br>
            <br>

            <label for="course">Mata Kuliah</label> <br>
            <input type="text" id="course">
            <br>
            <br>

            <label for="grade">Grade</label> <br>
            <select id="grade">
                <option value="">Pilih Grade</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
            <br>

            <button type="button" onclick="hitung()">Hitung</button>
            <br>
            <br>

            <div class= "tabell">
                <table id="result">
                <tr>
                    <th>Nama</th>
                    <th>Mata Kuliah</th>
                    <th>Grade</th>
                    <th>Nilai Rata-rata</th>
                </tr>
                </table>
            </div>
        </form>

    </div>

    <script>
        function hitung() {
            const gradeValues = {
                A: 4,
                B: 3,
                C: 2,
                D: 1,
                E: 0
            };
            const name = document.getElementById("name").value;
            const course = document.getElementById("course").value;
            const selectedGrade = document.getElementById("grade").value;

            if (selectedGrade in gradeValues) {
                const gradeValue = gradeValues[selectedGrade];
                const resultElement = document.getElementById("result");

                const totalGradeValues = gradeValue; 
                const average = totalGradeValues; 
                
                // menambahkan insertRow insertRow(-1)
                resultElement.insertRow(-1).innerHTML =
                    `<tr>
                    <td> ${name} </td>
                    <td> ${course} </td>
                    <td> ${selectedGrade} </td>
                    <td> ${average.toFixed(2)} </td>
                </tr>`;
            };
        };
    </script>
</body>

</html>