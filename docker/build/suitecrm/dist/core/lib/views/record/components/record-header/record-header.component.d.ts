/**
 * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
 * Copyright (C) 2021 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */
import { OnDestroy, OnInit } from '@angular/core';
import { Subscription } from 'rxjs';
import { RecordViewStore } from '../../store/record-view/record-view.store';
import { ModuleNavigation } from '../../../../services/navigation/module-navigation/module-navigation.service';
import { RecordActionsAdapter } from '../../adapters/actions.adapter';
import { ActionContext, ButtonInterface, Record, ViewMode } from 'common';
import { AppStateStore } from "../../../../store/app-state/app-state.store";
import { Router } from "@angular/router";
import * as i0 from "@angular/core";
export declare class RecordHeaderComponent implements OnInit, OnDestroy {
    actionsAdapter: RecordActionsAdapter;
    protected recordViewStore: RecordViewStore;
    protected moduleNavigation: ModuleNavigation;
    protected appState: AppStateStore;
    protected router: Router;
    record: Record;
    mode: ViewMode;
    loading: boolean;
    isScrolled: boolean;
    backButtonConfig: ButtonInterface;
    protected subs: Subscription[];
    onScroll(): void;
    constructor(actionsAdapter: RecordActionsAdapter, recordViewStore: RecordViewStore, moduleNavigation: ModuleNavigation, appState: AppStateStore, router: Router);
    ngOnInit(): void;
    ngOnDestroy(): void;
    get moduleTitle(): string;
    /**
     * Get Summary template
     *
     * @returns {string} template label
     */
    getSummaryTemplate(): string;
    /**
     * Build action context
     * @param record
     */
    getActionContext(record: Record): ActionContext;
    setBackButtonConfig(): void;
    static ɵfac: i0.ɵɵFactoryDeclaration<RecordHeaderComponent, never>;
    static ɵcmp: i0.ɵɵComponentDeclaration<RecordHeaderComponent, "scrm-record-header", never, {}, {}, never, never, false, never>;
}
