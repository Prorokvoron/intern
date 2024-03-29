<?php

namespace App\Http\Controllers;
use App\Http\Requests\TreeRequest;
use App\Http\Requests\UpdateTreeRequest;
use App\Http\Resources\TreeIndexResourceCollection;
use App\Http\Resources\TreeResourceShow;
use App\Models\Client;

use App\Models\Tree;
use Illuminate\Routing\Controller;


class TreeController extends Controller
{
    public function store(TreeRequest $treeRequest)
    {
        $input = $treeRequest->validated();
        $client = new Tree($input);
        $client->save();
        return $client;
    }

    public function show(Tree $tree): TreeResourceShow
    {
           return new TreeResourceShow($tree);
    }

    public function index(): TreeIndexResourceCollection
    {
        return TreeIndexResourceCollection::make(Tree::all());
    }
    public function update(UpdateTreeRequest $request, Tree $tree):Tree
    {
        $input = $request->validated();
        $tree =  Tree::findOrFail($tree->id);
        $tree->update($input);
        return $tree->fresh();
    }

    public function delete(Client $tree)
    {
       return Client::findOrFail($tree->id)->delete();
    }

}
