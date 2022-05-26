<?php

declare( strict_types=1 );

namespace App\Orchid\Screens\Girl;

use App\Orchid\Layouts\Role\RolePermissionLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use App\Orchid\Layouts\User\UserPasswordLayout;
use App\Orchid\Layouts\User\UserRoleLayout;


use App\Orchid\Layouts\Girl\GirlEditLayout;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Access\UserSwitch;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\RadioButtons;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class GirlEditScreen extends Screen {

    public $user;

    public function query( User $user ): iterable {
        $user->load( [ 'roles' ] );

        return [
            'user'       => $user,
            'permission' => $user->getStatusPermission(),
        ];
    }

    public function name(): ?string {
        return $this->user->exists ? 'Edit User' : 'Create User';
    }

    public function description(): ?string {
        return 'Details such as name, email and password';
    }

    /**
     * @return iterable|null
     */
    public function permission(): ?iterable {
        return [
            'platform.systems.users',
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable {
        return [
            Button::make( __( 'Impersonate user' ) )
                  ->icon( 'login' )
                  ->confirm( 'You can revert to your original state by logging out.' )
                  ->method( 'loginAs' )
                  ->canSee( $this->user->exists && \request()->user()->id !== $this->user->id ),

            Button::make( __( 'Remove' ) )
                  ->icon( 'trash' )
                  ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                  ->method( 'remove' )
                  ->canSee( $this->user->exists ),

            Button::make( __( 'Save' ) )
                  ->icon( 'check' )
                  ->method( 'save' ),
        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable {
        return [

            Layout::columns( [
                Layout::rows( [
                    Input::make( 'name' )
                         ->title( 'Имя' )
                         ->placeholder( 'Введите имя' ),
                    Group::make( [
                        Select::make( 'age' )
                              ->title( 'Возраст' )
                              ->options( [
                                  18,
                                  19,
                                  20,
                                  21,
                                  22,
                                  23,
                                  24,
                                  25,
                                  26,
                                  27,
                                  28,
                                  29,
                                  30,
                                  31,
                                  32,
                                  33,
                                  34,
                                  35,
                                  36,
                                  37,
                                  38,
                                  39,
                                  40,
                                  41,
                                  42,
                                  43,
                                  44,
                                  45,
                                  46,
                                  47,
                                  48,
                                  49,
                                  50,
                                  51,
                                  52,
                                  53,
                                  54,
                                  55,
                                  56,
                                  57,
                                  58,
                                  59,
                                  60,
                                  61,
                                  62,
                                  63,
                                  64,
                                  65
                              ] )
                              ->value( 0 ),
                        Input::make( 'height' )
                             ->mask( '999' )
                             ->title( 'Рост' )
                             ->placeholder( '' ),
                        Input::make( 'weight' )
                             ->mask( '999' )
                             ->title( 'Вес' )
                             ->placeholder( '' ),
                    ] ),
                    Group::make( [
                        Select::make( 'breast_size' )
                              ->title( 'Размер груди' )
                              ->options( [
                                  1,
                                  1.5,
                                  2,
                                  2.5,
                                  3,
                                  3.5,
                                  4,
                                  4.5,
                                  5,
                                  5.5,
                                  6,
                                  6.5
                              ] )
                              ->value( 0 ),
                        RadioButtons::make( 'breast_type' )
                                    ->title( 'Тип' )
                                    ->options( [
                                        0 => 'Натуральная',
                                        1 => 'Силикон'
                                    ] )->value( 0 ),
                    ] ),
                    Group::make( [
                        Select::make( 'appearance' )
                              ->title( 'Внешность' )
                              ->options( [
                                  0 => 'Выберите тип',
                                  1 => 'Славянская',
                                  2 => 'Азиатская',
                                  3 => 'Кавказская',
                                  4 => 'Восточная'
                              ] )
                              ->value( 0 ),
                        Select::make( 'haircut' )
                              ->title( 'Интимная стрижка' )
                              ->options( [
                                  0 => 'Выберите тип',
                                  1 => 'Частичная депиляция',
                                  2 => 'Полная депиляция',
                              ] )
                              ->value( 0 ),
                    ] ),
                ] )->title( 'О девушке' ),


                Layout::rows( [
                    CheckBox::make( 'express' )
                            ->sendTrueOrFalse()
                            ->title( 'Экспресс' )
                            ->placeholder( 'Есть' ),
                    Group::make( [
                        Select::make( 'section' )
                              ->title( 'Раздел' )
                              ->options( [
                                  0 => 'Выберите раздел',
                                  1 => 'Элитные',
                                  2 => 'Индивидуалки',
                                  3 => 'Дешевые',
                                  4 => 'БДСМ',
                                  5 => 'Массажистки'
                              ] )
                              ->value( 0 ),
                        Select::make( 'meeting_place' )
                              ->title( 'Место вастречи' )
                              ->options( [
                                  0 => 'Выберите место',
                                  1 => 'Квартиры',
                                  2 => 'Гостиницы',
                                  3 => 'Сауны',
                                  4 => 'Офисы',
                                  5 => 'За город МО',
                                  6 => 'Апартаменты',
                              ] )
                              ->value( 0 ),
                    ] ),
                    Group::make( [
                        Input::make( 'phone' )
                             ->mask( '+7 (999) 999-99-99' )
                             ->title( 'Номер телефона' )
                             ->placeholder( '' ),
                        Input::make( 'whatsapp' )
                             ->title( 'Номер WhatsApp' )
                             ->placeholder( '' ),
                        Input::make( 'telegram' )
                             ->title( 'Номер Telegram' )
                             ->placeholder( '' ),
                    ] ),
                    Group::make( [
                        Input::make( 'city' )
                             ->title( 'Город' )
                             ->placeholder( 'Введите город' ),
                        Select::make( 'metro' )
                              ->title( 'Станция метро' )
                              ->options( [
                                      0   => 'Выберите станцию метро',
                                      1   => 'Авиамоторная',
                                      2   => 'Автозаводская',
                                      3   => 'Академическая',
                                      4   => 'Александровский сад',
                                      5   => 'Алексеевская',
                                      6   => 'Алма-Атинская',
                                      7   => 'Алтуфьево',
                                      8   => 'Аминьевская',
                                      9   => 'Андроновка',
                                      10  => 'Аникеевка',
                                      11  => 'Аннино',
                                      12  => 'Арбатская',
                                      13  => 'Аэропорт',
                                      14  => 'Бабушкинская',
                                      15  => 'Багратионовская',
                                      16  => 'Баковка',
                                      17  => 'Балтийская',
                                      18  => 'Баррикадная',
                                      19  => 'Бауманская',
                                      20  => 'Беговая',
                                      21  => 'Белокаменная',
                                      22  => 'Беломорская',
                                      23  => 'Белорусская',
                                      24  => 'Беляево',
                                      25  => 'Бескудниково',
                                      26  => 'Бибирево',
                                      27  => 'Библиотека им. Ленина',
                                      28  => 'Битца',
                                      29  => 'Битцевский парк',
                                      30  => 'Борисово',
                                      31  => 'Боровицкая',
                                      32  => 'Боровское шоссе',
                                      33  => 'Ботанический сад',
                                      34  => 'Братиславская',
                                      35  => 'Бульвар Адмирала Ушакова',
                                      36  => 'Бульвар Дмитрия Донского',
                                      37  => 'Бульвар Рокоссовского',
                                      38  => 'Бунинская аллея',
                                      39  => 'Бутово',
                                      40  => 'Бутырская',
                                      41  => 'Варшавская',
                                      42  => 'ВДНХ',
                                      43  => 'Верхние котлы',
                                      44  => 'Верхние Лихоборы',
                                      45  => 'Владыкино',
                                      46  => 'Водники',
                                      47  => 'Водный стадион',
                                      48  => 'Войковская',
                                      49  => 'Волгоградский проспект',
                                      50  => 'Волжская',
                                      51  => 'Волоколамская',
                                      52  => 'Воробьевы горы',
                                      53  => 'Воронцовская',
                                      54  => 'Выставочная',
                                      55  => 'Выставочный центр',
                                      56  => 'Выхино',
                                      57  => 'Говорово',
                                      58  => 'Гражданская',
                                      59  => 'Давыдково',
                                      60  => 'Дегунино',
                                      61  => 'Деловой центр',
                                      62  => 'Депо',
                                      63  => 'Динамо',
                                      64  => 'Дмитровская',
                                      65  => 'Добрынинская',
                                      66  => 'Долгопрудная',
                                      67  => 'Домодедовская',
                                      68  => 'Достоевская',
                                      69  => 'Дубровка',
                                      70  => 'Жулебино',
                                      71  => 'ЗИЛ',
                                      72  => 'Зорге',
                                      73  => 'Зюзино',
                                      74  => 'Зябликово',
                                      75  => 'Измайлово',
                                      76  => 'Измайловская',
                                      77  => 'Калитники',
                                      78  => 'Калужская',
                                      79  => 'Кантемировская',
                                      80  => 'Карамышевская',
                                      81  => 'Каховская',
                                      82  => 'Каширская',
                                      83  => 'Киевская',
                                      84  => 'Китай-город',
                                      85  => 'Кленовый бульвар',
                                      86  => 'Кожуховская',
                                      87  => 'Коломенская',
                                      88  => 'Коммунарка',
                                      89  => 'Комсомольская',
                                      90  => 'Коньково',
                                      91  => 'Коптево',
                                      92  => 'Косино',
                                      93  => 'Котельники',
                                      94  => 'Красногвардейская',
                                      95  => 'Красногорская',
                                      96  => 'Краснопресненская',
                                      97  => 'Красносельская',
                                      98  => 'Красные ворота',
                                      99  => 'Красный Балтиец',
                                      100 => 'Красный Строитель',
                                      101 => 'Крестьянская застава',
                                      102 => 'Кропоткинская',
                                      103 => 'Крылатское',
                                      104 => 'Крымская',
                                      105 => 'Кубанская',
                                      106 => 'Кузнецкий мост',
                                      107 => 'Кузьминки',
                                      108 => 'Кунцевская',
                                      109 => 'Курская',
                                      110 => 'Курьяново',
                                      111 => 'Кутузовская',
                                      112 => 'Ленинский проспект',
                                      113 => 'Лермонтовский проспект',
                                      114 => 'Лесопарковая',
                                      115 => 'Лефортово',
                                      116 => 'Лианозово',
                                      117 => 'Лихоборы',
                                      118 => 'Лобня',
                                      119 => 'Локомотив',
                                      120 => 'Ломоносовский проспект',
                                      121 => 'Лубянка',
                                      122 => 'Лужники',
                                      123 => 'Лухмановская',
                                      124 => 'Люблино',
                                      125 => 'Марк',
                                      126 => 'Марксистская',
                                      127 => 'Марьина роща',
                                      128 => 'Марьино',
                                      129 => 'Маяковская',
                                      130 => 'Медведково',
                                      131 => 'Международная',
                                      132 => 'Менделеевская',
                                      133 => 'Минская',
                                      134 => 'Митино',
                                      135 => 'Мичуринский проспект',
                                      136 => 'Мневники',
                                      137 => 'Можайская',
                                      138 => 'Молодежная',
                                      139 => 'Москва-Товарная',
                                      140 => 'Москворечье',
                                      141 => 'Мякинино',
                                      142 => 'Нагатинская',
                                      143 => 'Нагатинский Затон',
                                      144 => 'Нагорная',
                                      145 => 'Народное ополчение',
                                      146 => 'Нахабино',
                                      147 => 'Нахимовский проспект',
                                      148 => 'Некрасовка',
                                      149 => 'Немчиновка',
                                      150 => 'Нижегородская',
                                      151 => 'Новаторская',
                                      152 => 'Новогиреево',
                                      153 => 'Новодачная',
                                      154 => 'Новокосино',
                                      155 => 'Новокузнецкая',
                                      156 => 'Новопеределкино',
                                      157 => 'Новослободская',
                                      158 => 'Новохохловская',
                                      159 => 'Новоясеневская',
                                      160 => 'Новые Черемушки',
                                      161 => 'Одинцово',
                                      162 => 'Озерная',
                                      163 => 'Окружная',
                                      164 => 'Окская',
                                      165 => 'Октябрьская',
                                      166 => 'Октябрьское поле',
                                      167 => 'Ольховая',
                                      168 => 'Опалиха',
                                      169 => 'Орехово',
                                      170 => 'Остафьево',
                                      171 => 'Отрадное',
                                      172 => 'Охотный ряд',
                                      173 => 'Павелецкая',
                                      174 => 'Павшино',
                                      175 => 'Панфиловская',
                                      176 => 'Парк Культуры',
                                      177 => 'Парк Победы',
                                      178 => 'Партизанская',
                                      179 => 'Пенягино',
                                      180 => 'Первомайская',
                                      181 => 'Перерва',
                                      182 => 'Перово',
                                      183 => 'Петровский Парк',
                                      184 => 'Петровско-Разумовская',
                                      185 => 'Печатники',
                                      186 => 'Пионерская',
                                      187 => 'Планерная',
                                      188 => 'Площадь Гагарина',
                                      189 => 'Площадь Ильича',
                                      190 => 'Площадь Революции',
                                      191 => 'Подольск',
                                      192 => 'Покровское',
                                      193 => 'Покровское-Стрешнево',
                                      194 => 'Полежаевская',
                                      195 => 'Полянка',
                                      196 => 'Пражская',
                                      197 => 'Преображенская площадь',
                                      198 => 'Прокшино',
                                      199 => 'Пролетарская',
                                      200 => 'Проспект Вернадского',
                                      201 => 'Проспект Мира',
                                      202 => 'Профсоюзная',
                                      203 => 'Пушкинская',
                                      204 => 'Пятницкое шоссе',
                                      205 => 'Рабочий поселок',
                                      206 => 'Раменки',
                                      207 => 'Рассказовка',
                                      208 => 'Речной вокзал',
                                      209 => 'Ржевская',
                                      210 => 'Рижская',
                                      211 => 'Римская',
                                      212 => 'Ростокино',
                                      213 => 'Рубцовская',
                                      214 => 'Румянцево',
                                      215 => 'Рязанский проспект',
                                      216 => 'Савеловская',
                                      217 => 'Саларьево',
                                      218 => 'Свиблово',
                                      219 => 'Севастопольская',
                                      220 => 'Селигерская',
                                      221 => 'Семеновская',
                                      222 => 'Серпуховская',
                                      223 => 'Сетунь',
                                      224 => 'Силикатная',
                                      225 => 'Сколково',
                                      226 => 'Славянский бульвар',
                                      227 => 'Смоленская',
                                      228 => 'Сокол',
                                      229 => 'Соколиная гора',
                                      230 => 'Сокольники',
                                      231 => 'Солнцево',
                                      232 => 'Спартак',
                                      233 => 'Спортивная',
                                      234 => 'Сретенский бульвар',
                                      235 => 'Стахановская',
                                      236 => 'Стрешнево',
                                      237 => 'Строгино',
                                      238 => 'Стромынка',
                                      239 => 'Студенческая',
                                      240 => 'Сухаревская',
                                      241 => 'Сходненская',
                                      242 => 'Таганская',
                                      243 => 'Тверская',
                                      244 => 'Театральная',
                                      245 => 'Текстильщики',
                                      246 => 'Телецентр',
                                      247 => 'Теплый Стан',
                                      248 => 'Тестовская',
                                      249 => 'Технопарк',
                                      250 => 'Тимирязевская',
                                      251 => 'Третьяковская',
                                      252 => 'Трикотажная',
                                      253 => 'Тропарево',
                                      254 => 'Трубная',
                                      255 => 'Тульская',
                                      256 => 'Тургеневская',
                                      257 => 'Тушинская',
                                      258 => 'Угрешская',
                                      259 => 'Улица 1905 года',
                                      260 => 'Улица 800-летия Москвы',
                                      261 => 'Улица Академика Королева',
                                      262 => 'Улица Академика Янгеля',
                                      263 => 'Улица Горчакова',
                                      264 => 'Улица Дмитриевского',
                                      265 => 'Улица Милашенкова',
                                      266 => 'улица Народного ополчения',
                                      267 => 'Улица Сергея Эйзенштейна',
                                      268 => 'Улица Скобелевская',
                                      269 => 'Улица Старокачаловская',
                                      270 => 'Университет',
                                      271 => 'Филатов Луг',
                                      272 => 'Филевский парк',
                                      273 => 'Фили',
                                      274 => 'Фонвизинская',
                                      275 => 'Фрунзенская',
                                      276 => 'Хлебниково',
                                      277 => 'Ховрино',
                                      278 => 'Хорошево',
                                      279 => 'Хорошевская',
                                      280 => 'Царицыно',
                                      281 => 'Цветной бульвар',
                                      282 => 'ЦСКА',
                                      283 => 'Черкизовская',
                                      284 => 'Чертановская',
                                      285 => 'Чеховская',
                                      286 => 'Чистые пруды',
                                      287 => 'Чкаловская',
                                      288 => 'Шаболовская',
                                      289 => 'Шелепиха',
                                      290 => 'Шереметьевская',
                                      291 => 'Шипиловская',
                                      292 => 'Шоссе Энтузиастов',
                                      293 => 'Щелковская',
                                      294 => 'Щербинка',
                                      295 => 'Щукинская',
                                      296 => 'Электрозаводская',
                                      297 => 'Юго-Восточная',
                                      298 => 'Юго-Западная',
                                      299 => 'Южная',
                                      300 => 'Ясенево'
                                  ]
                              )
                              ->multiple()
                              ->value( 0 ),
                    ] )
                ] )->title( 'Информация' ),
            ] ),

            Layout::columns( [
                Layout::rows( [
                    Upload::make( 'files' )
                          ->title( 'Upload files' )
                ] )->title( 'Изображения' ),
            ] ),

            Layout::columns( [
                Layout::rows( [
                    TextArea::make( 'description' )
                            ->placeholder( 'Короткое описание' )
                            ->rows( 6 )->style( 'max-width: 100%;width: 100%;' ),
                ] )->title( 'Описание' ),
            ] ),


            // SERVICES
            GirlEditLayout::class,


//            Layout::view( 'platform::dummy.block' ),
//
//            Layout::columns( [
//                GirlEditLayout::class,
//                Layout::view( 'platform::dummy.block' ),
//                Layout::view( 'platform::dummy.block' ),
//            ] ),

        ];

    }

    /**
     * @param User $user
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save( User $user, Request $request ) {
        $request->validate( [
            'user.email' => [
                'required',
                Rule::unique( User::class, 'email' )->ignore( $user ),
            ],
        ] );

        $permissions = collect( $request->get( 'permissions' ) )
            ->map( function ( $value, $key ) {
                return [ base64_decode( $key ) => $value ];
            } )
            ->collapse()
            ->toArray();

        $user->when( $request->filled( 'user.password' ), function ( Builder $builder ) use ( $request ) {
            $builder->getModel()->password = Hash::make( $request->input( 'user.password' ) );
        } );

        $user
            ->fill( $request->collect( 'user' )->except( [ 'password', 'permissions', 'roles' ] )->toArray() )
            ->fill( [ 'permissions' => $permissions ] )
            ->save();

        $user->replaceRoles( $request->input( 'user.roles' ) );

        Toast::info( __( 'User was saved.' ) );

        return redirect()->route( 'platform.systems.users' );
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception
     *
     */
    public function remove( User $user ) {
        $user->delete();

        Toast::info( __( 'User was removed' ) );

        return redirect()->route( 'platform.systems.users' );
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAs( User $user ) {
        UserSwitch::loginAs( $user );

        Toast::info( __( 'You are now impersonating this user' ) );

        return redirect()->route( config( 'platform.index' ) );
    }
}
