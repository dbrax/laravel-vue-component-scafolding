<?php

namespace Epmnzava\VueComponent\Console;

use Illuminate\Console\GeneratorCommand;

class VueMakeComponentCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:vue-component';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Vue component';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Vue component';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../stubs/vue-component.stub';
    }

    /**
     * Determine if the class already exists.
     *
     * @param  string  $rawName
     * @return bool
     */
    protected function alreadyExists($rawName)
    {
        $name = class_basename(str_replace('\\', '/', $rawName));

        $path = "{$this->laravel['path']}/../resources/js/components/{$name}.vue";

        return file_exists($path);
    }

    /**
     * Replace the namespace for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return $this
     */
    protected function replaceNamespace(&$stub, $name)
    {
        $name = class_basename(str_replace('\\', '/', $name));

        $stub = str_replace('{Component}', $name, $stub);

        return $this;
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        $name = class_basename(str_replace('\\', '/', $name));

        return "{$this->laravel['path']}/../resources/js/components/{$name}.vue";
    }
}
