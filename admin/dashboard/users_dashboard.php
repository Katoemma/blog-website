<?php

?>
<!-- header -->
<?php include 'dashIncludes/dashHeader.php'?>

<!-- page conttents start here! -->

<div class="container mx-auto px-4">
  <h2 class="text-2xl font-semibold mt-6">Manage Users</h2>

  <!-- Users Table -->
  <div class="mt-6 overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b">Name</th>
          <th class="py-2 px-4 border-b">Email</th>
          <th class="py-2 px-4 border-b">Role</th>
          <th class="py-2 px-4 border-b">Joined</th>
          <th class="py-2 px-4 border-b">Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- User 1 -->
        <tr>
          <td class="py-3 px-4 border-b">John Doe</td>
          <td class="py-3 px-4 border-b">john@example.com</td>
          <td class="py-3 px-4 border-b">Admin</td>
          <td class="py-3 px-4 border-b">May 1, 2023</td>
          <td class="py-3 px-4 border-b">
            <button class="text-blue-500 hover:text-blue-700 mr-2" onclick="editUser(1)">Edit</button>
            <button class="text-red-500 hover:text-red-700">Delete</button>
          </td>
        </tr>

        <!-- User 2 -->
        <tr>
          <td class="py-3 px-4 border-b">Jane Smith</td>
          <td class="py-3 px-4 border-b">jane@example.com</td>
          <td class="py-3 px-4 border-b">Editor</td>
          <td class="py-3 px-4 border-b">May 5, 2023</td>
          <td class="py-3 px-4 border-b">
            <button class="text-blue-500 hover:text-blue-700 mr-2" onclick="editUser(2)">Edit</button>
            <button class="text-red-500 hover:text-red-700">Delete</button>
          </td>
        </tr>

        <!-- Add more users as needed -->

      </tbody>
    </table>
  </div>

  <!-- Add New User Form -->
  <div class="mt-6">
    <h3 class="text-lg font-semibold mb-2">Add New User</h3>
    <form id="addUserForm" class="bg-white rounded p-4 border border-gray-300">
      <div class="mb-4">
        <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
        <input type="text" id="name" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter name" required>
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
        <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter email" required>
      </div>
      <div class="mb-4">
        <label for="role" class="block text-gray-700 font-semibold mb-2">Role</label>
        <select id="role" class="w-full px-3 py-2 border border-gray-300 rounded" required>
          <option value="">Select role</option>
          <option value="admin">Admin</option>
          <option value="editor">Editor</option>
          <option value="user">User</option>
        </select>
      </div>
      <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Add User</button>
      </div>
    </form>
  </div>

  <!-- Edit User Form (Hidden by default) -->
  <div id="editUserFormContainer" class="mt-6 hidden">
    <h3 class="text-lg font-semibold mb-2">Edit User</h3>
    <form id="editUserForm" class="bg-white rounded p-4 border border-gray-300">
      <div class="mb-4">
        <label for="editName" class="block text-gray-700 font-semibold mb-2">Name</label>
        <input type="text" id="editName" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter name" required>
      </div>
      <div class="mb-4">
        <label for="editEmail" class="block text-gray-700 font-semibold mb-2">Email</label>
        <input type="email" id="editEmail" class="w-full px-3 py-2 border border-gray-300 rounded" placeholder="Enter email" required>
      </div>
      <div class="mb-4">
        <label for="editRole" class="block text-gray-700 font-semibold mb-2">Role</label>
        <select id="editRole" class="w-full px-3 py-2 border border-gray-300 rounded" required>
          <option value="">Select role</option>
          <option value="admin">Admin</option>
          <option value="editor">Editor</option>
          <option value="user">User</option>
        </select>
      </div>
      <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update User</button>
        <button type="button" class="bg-red-500 text-white py-2 px-4 rounded ml-2" onclick="cancelEditUser()">Cancel</button>
      </div>
    </form>
  </div>
</div>



</body>
</html>