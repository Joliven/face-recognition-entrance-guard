<?php

namespace App\Http\Controllers;

use App\Visit;
use Illuminate\Http\Request;
use App\Http\Resources\VisitCollection;
use App\Http\Resources\Visit as VisitResource;
use App\User;
use App\Building;
use App\Address;

class VisitController extends Controller
{

    /**
     * 列出所有访问记录
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($user->addresses);
        return new VisitCollection(Visit::all());
    }

    /**
     * 获取某个用户的所有访问记录
     *
     * @return \Illuminate\Http\Response
     */
    public function userIndex(User $user)
    {
        // dd($address2);
        return new VisitCollection($user->visits);
    }

    /**
     * 获取某个楼幢的所有访问记录
     *
     * @return \Illuminate\Http\Response
     */
    public function buildingIndex(Building $building)
    {
        // dd($address2);
        return new VisitCollection($building->visits);
    }

    /**
     * 获取某个住户地址的所有访问记录
     *
     * @return \Illuminate\Http\Response
     */
    public function addressIndex(Address $address)
    {
        // dd($address2);
        return new VisitCollection($address->visits);
    }

    /**
     * 列出某地址所有的用户以及角色和时间段
     *
     * @return \Illuminate\Http\Response
     */
    // public function userIndex(Address $address)
    // {
    //     // dd($address->users);
    //     return new AddressUserCollection($address->users);
    //     // return new UserAddressCollection($address->users);
    // }

    /**
     * 为地址注册用户并绑定权限和时间
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request,Address $address)
    {
        $visit = $address->visits()->create($request->all());
        // dd($visit);
        return new VisitResource($visit);
    }

     /**
     * 更新绑定权限和时间
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function update(Request $request,User $user,Address $address)
    // {
    //     $user->addresses()->updateExistingPivot($address->id,$request->all());
    //     $address2 = $user->addresses()->find($address->id);
    //     return new UserAddressResource($address2);
    // }   

    // /**
    //  * 删除某用户与地址的绑定
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(User $user,Address $address)
    // {
    //     $user->addresses()->detach($address->id);
    //     return response()->json([
    //         'success' => true,
    //     ]);
    // }
}
