document.querySelector("#new-task-form").addEventListener("submit", async e => {
	e.preventDefault();
	try {
		let res = await fetch("api/tasks", {
			method: "post",
			body: new FormData(e.target)
		});

		loadTasks();
	} catch (err) {
		alert("Falló");
	}
});

let taskTemplate = document.querySelector(".task-item");
let taskList = document.querySelector(".task-list");

taskTemplate.removeAttribute("hidden");
taskTemplate.remove();

async function loadTasks() {
	let res = await fetch("api/tasks", {
		headers: {
			"Accept": "application/json"
		}
	});
	let tasksData = await res.json();

	[...taskList.children].forEach(e => e.remove());

	tasksData.forEach(t => {
		let e = taskTemplate.cloneNode(true);
		e.dataset.priority = t.priority;
		e.querySelector(".description").textContent = t.description;
		e.querySelector(".created span").textContent = t.created;

		if (t.deadline) {
			e.querySelector(".deadline span").textContent = t.deadline;
		} else {
			e.querySelector(".deadline").remove();
		}

		taskList.append(e);
	});
}

loadTasks();