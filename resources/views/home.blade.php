
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pertanyaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Form Pertanyaan</h5>

            <form action="{{ route('question.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" name="email"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                    <textarea id="pertanyaan" name="pertanyaan"
                              class="form-control" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Kirim Pertanyaan
                </button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
