<!DOCTYPE html>
<html>

<head>
  <title>Input New Mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>

    .form-container {
      max-width: 500px;
      width: 100%;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>

<header>
        <div class="px-16 py-8 bg-[#14213D] flex flex-row justify-between">
            <div>
                <h2 class="text-white font-semibold text-xl">
                    Kartika Diva Asmara Gita
                </h2>
            </div>
            <div>
                <a href="/mahasiswa-list">
                    <h2 class="text-white font-semibold text-xl transition hover:text-[#FCA311]">Admin</h2>
                </a>
            </div>
        </div>
    </header>
  <div class="h-screen flex items-center justify-center">
    <div class="form-container">
      <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-form') ?>" class="bg-[#14213D] shadow-md rounded p-6">
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-white">Nama</label>
          <input type="text" name="m_nama" id="m_nama" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="sinopsis" class="block text-sm font-medium text-white">NRP</label>
          <input type="text" name="m_nrp" id="m_nrp" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="bioskop" class="block text-sm font-medium text-white">E-Mail</label>
          <input type="text" name="m_email" id="m_email" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <button type="submit" class="w-full bg-[#FCA311] hover:bg-white hover:text-[#14213D] font-semibold text-white py-2 px-4 rounded-md transition ease-in-out">Insert Mahasiswa</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          m_nama: {
            required: true,
          },
          m_nrp: {
            required: true,
          },
          m_email: {
            required: true,
          },
        },
        messages: {
          m_nama: {
            required: "Name is required.",
          },
          m_nrp: {
            required: "NRP is required.",
          },
          m_email: {
            required: "E-Mail is required.",
          },
        },
      });
    }
  </script>
</body>

</html>
