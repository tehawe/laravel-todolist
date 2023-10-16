<?php

namespace App\Services;

interface TodolistService
{
    public function saveTodo(string $id, string $todo): void; // Add data todo
    public function getTodolist(): array; // Get all data todo
    public function removeTodo(string $id): void; // Remove data todo
}
