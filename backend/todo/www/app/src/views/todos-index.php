<style>
	.task-item {
		padding: 10px;
		border: 1px solid #bbb;
		border-radius: 5px;
	}

	.task-item[data-priority="1"] {
		border-color: orange;
	}

	.task-item[data-priority="2"] {
		border-color: red;
	}
</style>

<header>
	<h1>Tareas de <?php echo $this->user->name ?></h1>
</header>
<details>
	<summary>Crear Tarea</summary>
	<form id="new-task-form">
		<header>
			<h1>Nueva tarea</h1>
		</header>
		<div class="field">
			<label>Descripción</label>
			<textarea name="description" required maxlength="500"></textarea>
		</div>
		<div class="field">
			<label>Prioridad</label>
			<select name="priority">
				<option value="0">Normal</option>
				<option value="1">Importante</option>
				<option value="2">Urgente</option>
			</select>
		</div>
		<div class="field">
			<label>Fecha límite</label>
			<input type="date" name="deadline">
		</div>
		<footer>
			<button>Crear tarea</button>
		</footer>
	</form>
</details>

<section class="task-list">
	<article class="task-item" data-priority="0" hidden>
		<p class="description"></p>
		<p class="created">Creado el <span></span></p>
		<p class="deadline">Para entregarse el <span></span></p>
	</article>
</section>

<script src="res/scripts/todos-index.js"></script>