<div class="create-container">
    <h2>Add New Movie</h2>
    <form method="POST" action="index.php?action=create">
        <label for="title">Movie Title</label>
        <input type="text" id="title" name="title" placeholder="Masukkan judul film" required>

        <label for="genre">Movie Genre</label>
        <input type="text" id="genre" name="genre" placeholder="Masukkan genre film" required>

        <label for="year">Release Year</label>
        <input type="text" id="year" name="year" placeholder="Masukkan tahun rilis" required>

        <button type="submit">Save</button>
    </form>
    <div class="back-link">
        <a href="/film/">Back to MovieList</a>
    </div>
</div>
