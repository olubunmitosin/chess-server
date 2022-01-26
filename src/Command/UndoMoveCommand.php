<?php

namespace ChessServer\Command;

class UndoMoveCommand extends AbstractCommand
{
    public function __construct()
    {
        $this->name = '/undo_move';
        $this->description = 'Undoes the last move.';
        $this->dependsOn = [
            StartCommand::class,
        ];
    }

    public function validate(array $argv)
    {
        return count($argv) - 1 === 0;
    }
}
