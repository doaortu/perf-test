<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoListGroup;

class TodoListGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = TodoListGroup::all();
        return view('todo-list-groups.index', compact('groups'));
    }

    /**
     * Display the specified resource.
     *
     * @param  TodoListGroup  $group
     * @return \Illuminate\Http\Response
     */
    public function show(TodoListGroup $group)
    {
        $items = $group->items; // Access items through the relationship method
        return view('todo-list-groups.show', compact('group', 'items'));
    }

    public function delete(TodoListGroup $group)
    {
        $group->delete();

        return redirect()->route('todo-list-groups.index')
            ->with('success', 'Todo list group deleted successfully!');
    }
}