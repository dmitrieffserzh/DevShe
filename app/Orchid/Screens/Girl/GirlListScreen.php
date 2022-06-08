<?php

declare( strict_types=1 );

namespace App\Orchid\Screens\Girl;

use App\Models\Profile;
use App\Orchid\Layouts\Girl\GirlListLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class GirlListScreen extends Screen {
    public function query(): iterable {
        return [
            'profile' => Profile::filters()->defaultSort( 'id', 'desc' )->paginate(),
        ];
    }


    public function name(): ?string {
        return 'Профили девушек';
    }


    public function description(): ?string {
        return 'Все зарегистрированные профили девушек';
    }


    public function permission(): ?iterable {
        return [
            'platform.systems.users',
        ];
    }


    public function commandBar(): iterable {
        return [
            Link::make( __( 'Add' ) )
                ->icon( 'plus' )
                ->route( 'platform.girls.create' ),
        ];
    }


    public function layout(): iterable {
        return [
            //UserFiltersLayout::class,
            GirlListLayout::class,

//            Layout::modal('asyncEditUserModal', UserEditLayout::class)
//                ->async('asyncGetUser'),
        ];
    }


    public function asyncGetUser( User $user ): iterable {
        return [
            'user' => $user,
        ];
    }


    public function saveUser( Request $request, User $user ): void {
        $request->validate( [
            'user.email' => [
                'required',
                Rule::unique( User::class, 'email' )->ignore( $user ),
            ],
        ] );

        $user->fill( $request->input( 'user' ) )->save();

        Toast::info( __( 'User was saved.' ) );
    }

    public function status( Request $request ) {
        $profile         = Profile::findOrFail( $request->get( 'id' ) );
        $profile->active = $request->get( 'status' );
        if ( $profile->save() ) {
            Toast::info( 'Статус профиля успешно изменен!' );

            return redirect()->route( 'platform.girls' );
        }
    }

    public function remove( Request $request ): void {
        Profile::findOrFail( $request->get( 'id' ) )->delete();

        Toast::info( 'Профиль успешно удален' );
    }
}
