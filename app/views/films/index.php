<div class="index-container">

    <h1>MovieList</h1>

    <?php if (!empty($films)) : ?>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Movie Title</th>
                    <th>Genre</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($films as $index => $film) : ?>
                    <tr>
                        <td><?= $index + 1; ?></td>
                        <td><?= htmlspecialchars($film['title']); ?></td>
                        <td><?= htmlspecialchars($film['genre']); ?></td>
                        <td><?= htmlspecialchars($film['year']); ?></td>
                        <td>
                        <a href="/film/?action=delete&id=<?= $film['id'] ?>" class="btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus film ini?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/film/?action=create" class="add-film btn btn-add">Add Movie</a>
    <?php else : ?>
        <p>Tidak ada film dalam daftar. Tambahkan film baru dengan mengklik tombol di atas!</p>
    <?php endif; ?>
</div>
