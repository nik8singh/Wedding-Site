$(document).ready(function () {
  createTable();
});

function createTable() {
  let data;
  const stored = localStorage["dataset"];
  if (stored) {
    data = JSON.parse(stored);
  }

  $("#myTable").DataTable({
    data: data,
    columns: [
      {data: "response_id"},
      {data: "name"},
      {data: "phone"},
      {data: "response"},
      {data: "adult_guest"},
      {data: "child_guest"},
      {data: "visa"}
    ]
  });
}
